<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Jobs\SendEmailJobFM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
class EmailController extends Controller
{
    public function getEmail(Request $request)
    {

       for ($i=0; $i < 10; $i++) {
        $details = [
            'email' => 'ateeqadrees83@gmail.com',
            'title' => 'Subject',
            'message' => 'Message',
            'company_email' => $request['company_email']??env('MAIL_FROM_ADDRESS'),
            'company' => $request['company']??env('MAIL_FROM_NAME'),
            'file_path'=>null
        ];
        SendEmailJobFM::dispatch($details)->delay(now()->addMinutes(1));
       }

      return  DB::table('jobs')->count();
    }
    public function sendEmail(Request $request)
    {
        $emails=json_decode($request['emails']);
        // $emails=['ateeqadrees83@gmail.com'];
        $file_path=null;
        if ($request->file !== null) {
            $base64String = $request->file; // Assume the field name is 'image'

            // Remove the part before the base64 data (if it exists, like "data:image/png;base64,")
            if (strpos($base64String, 'data:image') === 0) {
                $base64String = preg_replace('#^data:image/\w+;base64,#i', '', $base64String);
            }

            // Decode the Base64 string
            $imageData = base64_decode($base64String);

            // Create a unique file name for the image
            $fileName = 'image_' . Str::random(10) . '.png';

            // Store the image in the 'public' disk (you can choose another disk if needed)
            // $path = Storage::disk('public')->put($fileName, $imageData);

            $path = public_path('uploads/' . $fileName); // This will save the file in public/uploads folder

            // Store the decoded image as a file in the public directory
            file_put_contents($path, $imageData);

            $file_path = 'https://cms.fissionmonster.com/uploads/'.$fileName;


        }
        foreach($emails as $email){
            $details = [
            'email' => $email,
            'title' => $request['subject'],
            'message' => $request['message'],
            'company_email' => $request['company_email']??env('MAIL_FROM_ADDRESS'),
            'company' => $request['company']??env('MAIL_FROM_NAME'),
            'file_path'=>$file_path
        ];

        if($request['company']==="Fission Monster"){

            SendEmailJobFM::dispatch($details);
        }else{

            SendEmailJob::dispatch($details);
        }


        // Mail::send('emails.test_email', ['details' => $details],  function ($m) use ($details) {
        //     $m->to($details['email'])->subject($details['title']);
        // });
        }



        return response()->json([
            'message' => 'Email sent successfully!',
            'status' => true
        ]);
    }

    public function getEmailTwo(Request $request)
    {
        // $emails=['ateeqadrees83@gmail.com','ateeq.adrees86@gmail.com','cricnewstoday95@gmail.com'];

        $apiToken = 'tYOfb3CBUeXaWZMzFsGxgQxOnUFhHGLfDs8NvjO20c264c7d';

        $client = new \GuzzleHttp\Client();

        $response = $client->request('POST', 'https://waapi.app/api/v1/instances/40890/client/action/send-message', [
            'body' => '{"chatId":"923004330812@c.us","message":"Hello @1234567890, how are you?"}',
            'headers' => [
                'accept' => 'application/json',
                'authorization' => 'Bearer tYOfb3CBUeXaWZMzFsGxgQxOnUFhHGLfDs8NvjO20c264c7d',
                'content-type' => 'application/json',
            ],
        ]);

        return json_decode($response->getBody());

        // $client = new \GuzzleHttp\Client();
        // $response = $client->request('GET', 'https://waapi.app/api/v1/instances', [
        //     'headers' => [
        //         'Authorization' => 'Bearer ' . $apiToken,
        //         'Accept' => 'application/json',
        //         'Content-Type' => 'application/json',
        //     ]
        // ]);

        // $responseBody = json_decode($response->getBody(), true);
        // $instances = $responseBody['instances']; //array of all instances of the authenticated user

        // foreach ($instances as $instance) {
        //   return  $id = $instance['id'];
        //     $ownerEmail = $instance['owner'];
        //     $webhookUrl = $instance['webhook_url']; //this webhook url will receive the subscribed events
        //     $webhookEvents = $instance['webhook_events']; //array of subscribed events
        // }

        // 40890
        //     $client = new \GuzzleHttp\Client();

        // $response = $client->request('POST', 'https://waapi.app/api/v1/instances/id/client/action/send-message', [
        //     'body' => '{"chatId":"923010451752@c.us","message":"Hello"}',
        //         'headers' => [
        //             'accept' => 'application/json',
        //             'authorization' => 'Bearer tYOfb3CBUeXaWZMzFsGxgQxOnUFhHGLfDs8NvjO20c264c7d',
        //             'content-type' => 'application/json',
        //         ],
        //         ]);

        // echo $response->getBody();

        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://waapi.app/api/v1/instances/40890/client/qr', [
            'headers' => [
                'accept' => 'application/json',
                'authorization' => 'Bearer tYOfb3CBUeXaWZMzFsGxgQxOnUFhHGLfDs8NvjO20c264c7d',
            ],
        ]);

        $data = $response->getBody();

        $image = json_decode($data)->qrCode->data->qr_code;

        return view('test', get_defined_vars());

        //   return  DB::table('jobs')->get();
    }
}
