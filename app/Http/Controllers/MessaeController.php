<?php

namespace App\Http\Controllers;

use App\Jobs\SendChatMessage;
use App\Jobs\SendChatFMMessage;
use App\Jobs\SendFileMessage;
use App\Models\DataLog;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use stdClass;

class MessaeController extends Controller
{

    public function sendMessage(Request $request)
    {
        // return 1;

        if (DB::table('jobs')->count() > 0) {
            return response()->json([
                'message' => 'Message sending in progress!',
                'status' => false
            ]);
        }

        // $phone_numbers=['+923004330812','+923318412731','+923364786425'];
        $phone_numbers = json_decode($request['phone_numbers']);



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

            $file_path ='https://iadsr.fissionmonster.com/uploads/' . $fileName;
            $delay = 0;
            foreach ($phone_numbers as $key => $phone_number) {
                $messageContent = [
                    'phone_no' => preg_replace('/[^\p{L}\p{N}\s]/u', '', $phone_number->phone_number),
                    'message' => strip_tags($request['message']),
                    'file' => $file_path,

                ];
                SendFileMessage::dispatch((object)$messageContent)->delay(now()->addSeconds($delay));
                $delay += 20;
            }


            // Dispatch the job to send the message asynchronously

        } else {
            $delay = 0;
            foreach ($phone_numbers as $key => $phone_number) {
                $messageContent = [
                    // 'phone_no' => preg_replace('/[^\p{L}\p{N}\s]/u', '', $phone_number),
                    'phone_no' => preg_replace('/[^\p{L}\p{N}\s]/u', '', $phone_number->phone_number),
                    'message' => strip_tags($request['message'])
                ];

                // Dispatch the job to send the message asynchronously
                SendChatMessage::dispatch((object)$messageContent)->delay(now()->addSeconds($delay));
                $delay += 30;
            }
        }

        $data = new stdClass();
        $data->type = "Message";
        $data->company = $request['company'];
        $data->date = Carbon::now();
        $data->totalRecord = count($phone_numbers);

        DataLog::saveLog($data);



        return response()->json([
            'message' => 'Message sent successfully!',
            'status' => true
        ]);
    }

     public function sendFMMessage(Request $request)
    {
       

        // $phone_numbers=['+923004330812','+923318412731','+923364786425'];
        $phone_numbers = json_decode($request['phone_numbers']);

         $delay = 0;
            foreach ($phone_numbers as $key => $phone_number) {
                $messageContent = [
                    // 'phone_no' => preg_replace('/[^\p{L}\p{N}\s]/u', '', $phone_number),
                    'phone_no' => preg_replace('/[^\p{L}\p{N}\s]/u', '', $phone_number),
                    'message' => strip_tags($request['message'])
                ];

                // Dispatch the job to send the message asynchronously
                SendChatFMMessage::dispatch((object)$messageContent)->delay(now()->addSeconds($delay));
                $delay += 30;
            }



        return response()->json([
            'message' => 'Message sent successfully!',
            'status' => true
        ]);
    }

    

    public function sessionDetail()
    {
        $client = new Client();
        $apiKey = env('WA_ENV');
        $url = 'https://www.wasenderapi.com/api/whatsapp-sessions/' . env('Session_ID');

        try {
            $response = $client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Accept' => 'application/json',
                ]
            ]);

            return $response->getBody();
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            echo "Request failed: " . $e->getMessage();
            if ($e->hasResponse()) {
                echo "\nResponse: " . $e->getResponse()->getBody();
            }
        }
    }

    public function getWhatsAppInfo()
    {
        $data = json_decode($this->sessionDetail(), true);
        $data = $data['data'];

        if ($data['status'] == "connected") {
            $data_object = new stdClass();
            $data_object->phone_number = env('Session_ID');
            $data_object->displayName = $data['name'];
            $data_object->contactId = $data['phone_number'];
            $data_object->formattedNumber = $data['phone_number'];
            return response()->json([
                'status' => true,
                'me' => $data_object


            ]);
        }

        // $client = new Client();
        // $apiKey = env('WA_KEY');
        // $url = 'https://www.wasenderapi.com/api/status';

        // try {
        //     $response = $client->get($url, [
        //         'headers' => [
        //             'Authorization' => 'Bearer ' . $apiKey,
        //             'Accept' => 'application/json',
        //         ]
        //     ]);

        //     $data = json_decode($response->getBody(), true);
        //     if ($data['status'] == 'connected') {
        //         return response()->json(['status' => true]);
        //     } else {
        //         return response()->json(['status' => false]);
        //     }
        // } catch (\GuzzleHttp\Exception\RequestException $e) {
        //     echo "Request failed: " . $e->getMessage();
        //     if ($e->hasResponse()) {
        //         echo "\nResponse: " . $e->getResponse()->getBody();
        //     }
        // }
    }
    public function getWhatsAppIQrCode()
    {

        // $client = new \GuzzleHttp\Client();

        // $response = $client->request('GET', 'https://waapi.app/api/v1/instances/68034/client/qr', [
        //     'headers' => [
        //         'accept' => 'application/json',
        //         'authorization' => 'Bearer 2inDWNmmmYs6DqGqFjCyW9ZsaI4VCgDGRQaV1cvT38edb5cc',
        //     ],
        // ]);

        // // echo $response->getBody();

        // $whatsAppObject = json_decode($response->getBody());


        // if ($whatsAppObject->qrCode->status == 'error') {
        //     return response()->json(['status' => false]);
        // } else {

        //     return response()->json([
        //         'status' => true,
        //         'message' => 'QrCode Fetch Successfully',
        //         'qr_code' => $whatsAppObject->qrCode->data->qr_code,
        //     ]);
        // }


        // use GuzzleHttp\Client;

        // return 1;

        //    use GuzzleHttp\Client;

        // Create Session

        // $client = new Client();
        // $apiKey =env('WA_ENV');
        // $url = 'https://www.wasenderapi.com/api/whatsapp-sessions';

        // try {
        //     $response = $client->post($url, [
        //         'headers' => [
        //             'Authorization' => 'Bearer ' . $apiKey,
        //             'Content-Type' => 'application/json',
        //             'Accept' => 'application/json',
        //         ],
        //         'json' => [
        //             'name' => 'Sample Name',
        //             'phone_number' => '+923318412731',
        //             'account_protection' => true,
        //             'log_messages' => true,
        //             'read_incoming_messages' => true,
        //             'webhook_url' => '',
        //             'webhook_enabled' => false,
        //             'webhook_events' => [
        //                 'messages.received',
        //                 'session.status',
        //                 'messages.update'
        //             ],
        //         ]
        //     ]);

        //     $data=json_decode($response->getBody(), true);
        //     $api_Key=$data['data']['api_key'];
        //     $session_id=$data['data']['user_id'];
        //     $this->setEnvValue('WA_KEY',$api_Key);
        //     $this->setEnvValue('Session_ID',$session_id);
        //     return response()->json([
        //         'status' => true,
        //         'message' => 'Session Created Successfully',
        //         'api_key' => $api_Key,
        //         'session_id' => $session_id,
        //         ]);
        // } catch (\GuzzleHttp\Exception\RequestException $e) {
        //     // echo "Request failed: " . $e->getMessage();
        //     if ($e->hasResponse()) {
        //        return $data=json_decode($e->getResponse()->getBody(),true);

        //          return response()->json([
        //                 'status' => false,
        //                 'message' => $data['message'],
        //             ]);
        //     }
        // }


        //  Whatsap Session

        if ($this->checkWhatsAppInfo() == false) {
            $client = new Client();
            $apiKey = env('WA_ENV');
            $url = 'https://www.wasenderapi.com/api/whatsapp-sessions/5401/connect';

            try {
                $response = $client->post($url, [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $apiKey,
                        'Accept' => 'application/json',
                    ]
                ]);

                $data = json_decode($response->getBody(), true);

                return response()->json([
                    'status' => true,
                    'message' => 'QrCode Fetch Successfully',
                    'qr_code' => $data['data']['qrCode'],
                ]);
            } catch (\GuzzleHttp\Exception\RequestException $e) {
                echo "Request failed: " . $e->getMessage();
                if ($e->hasResponse()) {
                    echo "\nResponse: " . $e->getResponse()->getBody();
                }
            }
        }
    }

    public function setEnvValue($key, $value)
    {
        $envPath = base_path('.env');

        if (file_exists($envPath)) {
            $env = file_get_contents($envPath);

            if (strpos($env, "$key=") !== false) {
                $env = preg_replace("/^$key=.*$/m", "$key=\"$value\"", $env);
            } else {
                $env .= "\n$key=\"$value\"";
            }

            file_put_contents($envPath, $env);
        }
    }
    public function waLogout()
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('POST', 'https://waapi.app/api/v1/instances/68034/client/action/logout', [
            'headers' => [
                'accept' => 'application/json',
                'authorization' => 'Bearer 2inDWNmmmYs6DqGqFjCyW9ZsaI4VCgDGRQaV1cvT38edb5cc',
            ],
        ]);

        // echo $response->getBody();

        $whatsAppObject = json_decode($response->getBody());


        if ($whatsAppObject->data->status == 'error') {
            return response()->json(['status' => false]);
        } else {

            return response()->json([
                'status' => true,
                'message' => 'Logout Successfully',

            ]);
        }
    }

    public function getWAStatus()
    {
        // $client = new \GuzzleHttp\Client();

        // $response = $client->request('GET', 'https://waapi.app/api/v1/instances/68034/client/me', [
        //     'headers' => [
        //         'accept' => 'application/json',
        //         'authorization' => 'Bearer 2inDWNmmmYs6DqGqFjCyW9ZsaI4VCgDGRQaV1cvT38edb5cc',
        //     ],
        // ]);

        // $whatsAppObject = json_decode($response->getBody());
        // if ($whatsAppObject->status == 'error') {
        //     return response()->json(['status' => false]);
        // } else {
        //     return response()->json(['status' => true, 'data' => $whatsAppObject->me]);
        // }

        //     $data=json_decode($this->sessionDetail(),true);
        //    $data=$data['data'];

        // if($data['status']=="connected"){
        //     $data_object=new stdClass();
        //     $data_object->phone_number=env('Session_ID');
        //     $data_object->displayName=$data['name'];
        //     $data_object->contactId=$data['phone_number'];
        //     $data_object->formattedNumber=$data['phone_number'];
        //     return response()->json([
        //         'status'=>true,
        //         'me'=>$data_object


        //     ]);

        //     }

        $client = new Client();
        $apiKey = env('WA_KEY');
        $url = 'https://www.wasenderapi.com/api/user';

        try {
            $response = $client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Accept' => 'application/json',
                ]
            ]);

            $data = json_decode($response->getBody(), true);
            if ($data['success'] == "connected") {
                $data_object = new stdClass();
                $data_object->instanceId = env('Session_ID');
                $data_object->displayName = $data['data']['name'] ?? 'No NAME';
                $data_object->contactId = $data['data']['id'];
                $data_object->formattedNumber = $data['data']['id'];
                return response()->json([
                    'status' => true,
                    'me' => $data_object


                ]);
            }
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            echo "Request failed: " . $e->getMessage();
            if ($e->hasResponse()) {
                echo "\nResponse: " . $e->getResponse()->getBody();
            }
        }

        // $client = new Client();
        // $apiKey = env('WA_KEY');
        // $url = 'https://www.wasenderapi.com/api/user';

        // try {
        //     $response = $client->get($url, [
        //         'headers' => [
        //             'Authorization' => 'Bearer ' . $apiKey,
        //             'Accept' => 'application/json',
        //         ]
        //     ]);

        //  return   $data = json_decode($response->getBody(), true);
        //     if ($data['success'] == true) {
        //         return response()->json(['status' => true, 'data' => null]);
        //     }
        // } catch (\GuzzleHttp\Exception\RequestException $e) {
        //     echo "Request failed: " . $e->getMessage();
        //     if ($e->hasResponse()) {
        //         echo "\nResponse: " . $e->getResponse()->getBody();
        //     }
        // }
        // return response()->json(['status' => true, 'data' => $whatsAppObject->me]);
    }

    public function checkWhatsAppInfo()
    {
        $client = new Client();
        $apiKey = env('WA_KEY');
        $url = 'https://www.wasenderapi.com/api/status';

        try {
            $response = $client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Accept' => 'application/json',
                ]
            ]);

            $data = json_decode($response->getBody(), true);
            if ($data['status'] == 'connected') {
                return true;
            } else {
                return false;
            }
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            echo "Request failed: " . $e->getMessage();
            if ($e->hasResponse()) {
                echo "\nResponse: " . $e->getResponse()->getBody();
            }
        }
    }

    public function sendTextMessage()
    {


        $client = new Client();
        $apiKey =env('WA_KEY');
        $url = 'https://www.wasenderapi.com/api/send-message';

        try {
            $response = $client->post($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
                'json' => [
                    'to' => '+923004330812',
                    'text' => 'Hello, here is your update.'
                ]
            ]);

            echo $response->getBody();
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            echo "Request failed: " . $e->getMessage();
            if ($e->hasResponse()) {
                echo "\nResponse: " . $e->getResponse()->getBody();
            }
        }
    }
    public function getAllGroup()
    {


     $client = new Client();
$apiKey =env('WA_KEY');
$url = 'https://www.wasenderapi.com/api/groups';

try {
    $response = $client->get($url, [
        'headers' => [
            'Authorization' => 'Bearer ' . $apiKey,
            'Accept' => 'application/json',
        ]
    ]);

    return json_decode($response->getBody(),true);
} catch (\GuzzleHttp\Exception\RequestException $e) {
    echo "Request failed: " . $e->getMessage();
    if ($e->hasResponse()) {
        echo "\nResponse: " . $e->getResponse()->getBody();
    }
    }
}
    public function sendGroupMessage()
    {


    $client = new Client();
$apiKey =env('WA_KEY');
$url = 'https://www.wasenderapi.com/api/send-message';

try {
    $response = $client->post($url, [
        'headers' => [
            'Authorization' => 'Bearer ' . $apiKey,
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' =>             [
            'to' => '120363404160773827@g.us',
            'text' => 'Ateeq In OFFICE',
            ]
    ]);

    echo $response->getBody();
} catch (\GuzzleHttp\Exception\RequestException $e) {
    echo "Request failed: " . $e->getMessage();
    if ($e->hasResponse()) {
        echo "\nResponse: " . $e->getResponse()->getBody();
    }
}
}
}
