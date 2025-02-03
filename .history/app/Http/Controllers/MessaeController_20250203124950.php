<?php

namespace App\Http\Controllers;

use App\Jobs\SendChatMessage;
use App\Jobs\SendFileMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class MessaeController extends Controller
{

    public function sendMessage(Request $request)
    {


        if ($request->file !== null) {
            $base64String = $request->file; // Assume the field name is 'image'



            $file_path = $base64String;
            $messageContent = [
                'phone_no' => '923004330812@c.us',
                'message' => strip_tags($request['message']),
                'file' => $file_path,

            ];

            // Dispatch the job to send the message asynchronously
            SendFileMessage::dispatch((object)$messageContent);

        }else{
            $messageContent = [
                'phone_no' => '923004330812@c.us',
                'message' => strip_tags($request['message'])
            ];

            // Dispatch the job to send the message asynchronously
            SendChatMessage::dispatch((object)$messageContent);
        }




        return response()->json([
            'message' => 'Message sent successfully!',
            'status' => true
        ]);
    }

    public function getWhatsAppInfo()
    {

        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://waapi.app/api/v1/instances/41430/client/me', [
            'headers' => [
                'accept' => 'application/json',
                'authorization' => 'Bearer 2inDWNmmmYs6DqGqFjCyW9ZsaI4VCgDGRQaV1cvT38edb5cc',
            ],
        ]);

        $whatsAppObject = json_decode($response->getBody());


        if ($whatsAppObject->me->status == 'error') {
            return response()->json(['status' => false]);
        } else {
            return response()->json(['status' => true]);
        }
    }
    public function getWhatsAppIQrCode()
    {

        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://waapi.app/api/v1/instances/41430/client/qr', [
            'headers' => [
                'accept' => 'application/json',
                'authorization' => 'Bearer 2inDWNmmmYs6DqGqFjCyW9ZsaI4VCgDGRQaV1cvT38edb5cc',
            ],
        ]);

        // echo $response->getBody();

        $whatsAppObject = json_decode($response->getBody());


        if ($whatsAppObject->qrCode->status == 'error') {
            return response()->json(['status' => false]);
        } else {

            return response()->json([
                'status' => True,
                'message' => 'QrCode Fetch Successfully',
                'qr_code' => $whatsAppObject->qrCode->data->qr_code,
            ]);
        }
    }
}
