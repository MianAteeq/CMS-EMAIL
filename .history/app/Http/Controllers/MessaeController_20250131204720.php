<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessaeController extends Controller
{

    public function sendMessage(Request $request) {

        $client = new \GuzzleHttp\Client();


        $response = $client->request('POST', 'https://waapi.app/api/v1/instances/41430/client/action/send-message', [
       'body' => '{"chatId":"923004330812@c.us","message":"Hello @1234567890, how are you?"}',
        'headers' => [
            'accept' => 'application/json',
            'authorization' => 'Bearer '.env('WA_ENV'),
            'content-type' => 'application/json',
        ],
        ]);

        echo $response->getBody();

    }
}
