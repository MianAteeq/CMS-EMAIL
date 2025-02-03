<?php

namespace App\Http\Controllers;

use App\Jobs\SendChatMessage;
use Illuminate\Http\Request;

class MessaeController extends Controller
{

    public function sendMessage(Request $request) {


        $messageContent = [
            'phone_no' =>'923004330812@c.us',
            'message'=>"Hello sir/madam this is Shah Seo Tools   ✅All type of seo tools available on best price.  Canva admin panel owner account available   Channel link Follow the Shah Seo Tools channel on WhatsApp: https://whatsapp.com/channel/0029VahBn7iFnSzEDRJxs61f  Page link https://www.facebook.com/share/1FFi7r1eRW/      Send your email for activation";
        ];

        // Dispatch the job to send the message asynchronously
        SendChatMessage::dispatch((object)$messageContent);

        return response()->json(['status' => 'Message queued']);


    }
}
