<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function getEmail(Request $request)
    {
        // $emails=['ateeqadrees83@gmail.com','ateeq.adrees86@gmail.com','cricnewstoday95@gmail.com'];

        $apiToken = 'tYOfb3CBUeXaWZMzFsGxgQxOnUFhHGLfDs8NvjO20c264c7d';

            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', 'https://waapi.app/api/v1/instances', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiToken,
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                ]
            ]);

            $responseBody = json_decode($response->getBody(), true);
            $instances = $responseBody['instances']; //array of all instances of the authenticated user

            foreach ($instances as $instance) {
              return  $id = $instance['id'];
                $ownerEmail = $instance['owner'];
                $webhookUrl = $instance['webhook_url']; //this webhook url will receive the subscribed events
                $webhookEvents = $instance['webhook_events']; //array of subscribed events
            }

    //   return  DB::table('jobs')->get();
    }
    public function sendEmail(Request $request)
    {
        $emails=['ateeqadrees83@gmail.com','ateeq.adrees86@gmail.com','cricnewstoday95@gmail.com'];

        // $emails=json_decode($request['emails']);
        foreach($emails as $email){
            $details = [
            'email' => $email,
            'title' => $request['subject'],
            'company' => $request['company'],
            'company_email' => 'developer@iadsr.edu.pk',
            'message' => $request['message'],
        ];

        SendEmailJob::dispatch($details);

        // Mail::send('emails.test_email', ['details' => $details],  function ($m) use ($details) {
        //     $m->to($details['email'])->subject($details['title']);
        // });
        }



        return response()->json([
            'message' => 'Email sent successfully!',
            'status' => true
        ]);
    }
}
