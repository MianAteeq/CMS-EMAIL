<?php

namespace App\Http\Controllers;

use App\Jobs\SendChatMessage;
use Illuminate\Http\Request;

class MessaeController extends Controller
{

    public function sendMessage(Request $request) {


        $messageContent = [
            'phone_no' =>'923004330812@c.us',
            'message'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'
        ];

        // Dispatch the job to send the message asynchronously
        SendChatMessage::dispatch((object)$messageContent);

        return response()->json(['status' => 'Message queued']);


    }
}
