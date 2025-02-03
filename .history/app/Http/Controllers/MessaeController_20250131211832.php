<?php

namespace App\Http\Controllers;

use App\Jobs\SendChatMessage;
use Illuminate\Http\Request;

class MessaeController extends Controller
{

    public function sendMessage(Request $request) {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'https://waapi.app/api/v1/instances/41430/client/action/send-message', [
            'body' => '{"chatId":"923004330812@c.us","message":"Hello @1234567890, how are you?"}',
            'headers' => [
              'accept' => 'application/json',
              'authorization' => 'Bearer 2inDWNmmmYs6DqGqFjCyW9ZsaI4VCgDGRQaV1cvT38edb5cc',
              'content-type' => 'application/json',
            ],
          ]);

          echo $response->getBody();

        // $messageContent = [
        //     'phone_no' =>'923004330812@c.us',
        //     'message'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'
        // ];

        // // Dispatch the job to send the message asynchronously
        // SendChatMessage::dispatch((object)$messageContent);

        // return response()->json(['status' => 'Message queued']);


    }
}
