<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use App\Models\PaymentLog;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Stripe\PaymentIntent;
use Stripe\Stripe;
class RegisterController extends Controller
{
    function register(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->location = $request->location;
        $user->job = $request->job;
        $user->jobType = $request->jobType;
        $user->source = $request->source;
        $user->save();
        $user->createOrGetStripeCustomer();
    }
    function paymentGateway()
    {
        return Inertia::render('PaymentGateway');
    }
    function paymentMethod(Request $request)
    {
        $user = $request->user();

        if ($user) {
            $paymentMethod = $request->paymentMethod;
            $user->updateDefaultPaymentMethod($paymentMethod);
            return response()->json(['message' => 'Payment method added successfully']);
        } else {
            return response()->json(['error' => 'User not authenticated'], 401);
        }
    }

    public function getSetupIntent(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $payment_intent = PaymentIntent::create(
            [
                'payment_method_types' => ['card'],
            ],
            [
                'stripe_account' => $request->user['stripe_user_id']
            ]
        );

        return $payment_intent;
    }

    public function setupSubscription(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $user = $request->user();
        $plan = $request->get('plan');

        $paymentMethod = $user->defaultPaymentMethod();

        if ($user) {
            $paymentMethod = $request->paymentMethod;
            try {
                $subscription = $user->newSubscription('default', $plan)
                    ->create($paymentMethod);

                return response()->json(['message' => 'Subscription created successfully']);
            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()], 500);
            }
        } else {
            return response()->json(['error' => 'User not authenticated'], 401);
        }
    }

    public function handleWebhook(Request $request)
    {
        $payload = $request->getContent();
        $sig_header = $request->header('stripe-signature');
        $event = null;

        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload,
                $sig_header,
                env('STRIPE_WEBHOOK_SECRET')
            );
        } catch (\UnexpectedValueException $e) {
            http_response_code(400);
            exit();
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            http_response_code(400);
            exit();
        }

        if ($event->type == 'invoice.payment_failed') {
            $invoice = $event->data->object;

            $user = User::where('stripe_id', $invoice['customer'])->first();

            if ($user) {

                PaymentLog::create([
                    'user_id' => $user->id,
                    'invoice_id' => $invoice['id'],
                    'amount_due' => $invoice['amount_due'],
                    'status' => 'failed',
                ]);
            } else {

                PaymentLog::create([
                    'user_id' => "unknown",
                    'invoice_id' => $invoice['id'],
                    'amount_due' => $invoice['amount_due'],
                    'status' => 'failed',
                ]);
            }
        }

        http_response_code(200);
    }
}
