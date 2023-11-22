<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AppController extends Controller
{
    public function feedback()
    {
        return Inertia::render('Feedback');
    }
    public function postFeedback(Request $request)
    {
        $feedback = new Feedback();
        $feedback->feedback = $request->feedback;
        $feedback->user_id = $request->user_id;
        $feedback->save();
    }
    public function getChat()
    {
        $cURLConnection = curl_init();

        curl_setopt($cURLConnection, CURLOPT_URL, 'https://api.docutrainer.com/api/company/4459440c-60c5-48d2-b792-987f7905289d/workspace/00000000-0000-0000-0000-000000000000/chats');

        $headers = array(
            'Content-Type: application/json',
            'Authorization: Bearer eyJhbGciOiJSUzI1NiIsImtpZCI6ImQ0OWU0N2ZiZGQ0ZWUyNDE0Nzk2ZDhlMDhjZWY2YjU1ZDA3MDRlNGQiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJodHRwczovL3NlY3VyZXRva2VuLmdvb2dsZS5jb20vdGF4Zmxvd2F1dGgiLCJhdWQiOiJ0YXhmbG93YXV0aCIsImF1dGhfdGltZSI6MTY5OTI1NDQxMCwidXNlcl9pZCI6IldRN2M1RTA5ZmtoNkZteGVMaE1RTXhSbFB4azIiLCJzdWIiOiJXUTdjNUUwOWZraDZGbXhlTGhNUU14UmxQeGsyIiwiaWF0IjoxNjk5MjU0NDEwLCJleHAiOjE2OTkyNTgwMTAsImVtYWlsIjoiYW5hbmRAcGllc29ja2V0LmNvbSIsImVtYWlsX3ZlcmlmaWVkIjpmYWxzZSwiZmlyZWJhc2UiOnsiaWRlbnRpdGllcyI6eyJlbWFpbCI6WyJhbmFuZEBwaWVzb2NrZXQuY29tIl19LCJzaWduX2luX3Byb3ZpZGVyIjoicGFzc3dvcmQifX0.UYzK5fGoZCzXYFVwC-52xImdiy1iJxsVUp0P4YtpDO8lG6d4B4ywTriA6in9D-kXxvT3kJjcO8J8tbYKmXNr8IUYgUFUakv2RvOjKAY7xeXUHaIFDdY2JEISvhzTsPUWB-zy7aXqw0O3K69gcMO-6TKh_vOwcqzvY9pk1Mvv9Th8oEP36C6AIqTEfEFnUiyE7MW6m1GTCSoy-VVPjssCZFBUj3k0TverYxnPQjHA_J9gZXdqWstOa2rcFkLpjh0CS5uXR_-6hG3dyxv5CSHLXriNEVkg-bI5zAXEhShbIVb83UWtgHtURZjpy0ursre7hVuUXvxbCwmDeYUUX7MQug'
        );
        curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($cURLConnection);


        curl_close($cURLConnection);


        $responseData = json_decode($response, true);

        if ($responseData !== null) {
            return $responseData;
        }
    }
}
