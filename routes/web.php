<?php

use App\Http\Controllers\AppController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::post('/signup', [RegisterController::class, 'register']);
Route::get('/payment', [RegisterController::class, 'paymentGateway']);
Route::get('/feedback', [AppController::class, 'feedback']);
Route::post('/postfeedback', [AppController::class, 'postFeedback']);
Route::get('/getchat', [AppController::class, 'getChat']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/paymentForm', function () {
    return Inertia::render('PaymentMethod');
});

Route::post('/paymentMethod', [RegisterController::class, 'paymentMethod']);
Route::post('/setupSubscription', [RegisterController::class, 'setupSubscription']);
Route::get('/getSetupIntent', [RegisterController::class, 'getSetupIntent']);
Route::post('/test', [RegisterController::class, 'handleWebhook']);
