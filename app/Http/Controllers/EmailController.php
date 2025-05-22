<?php

namespace App\Http\Controllers;

use App\Jobs\SendChatMessage;
use App\Jobs\SendEmailJob;
use App\Jobs\SendEmailJobDental;
use App\Jobs\SendEmailJobFM;
use App\Mail\SendEmailDental;
use App\Models\DataLog;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use stdClass;

class EmailController extends Controller
{
    public function getEmail(Request $request)
    {

        $details = [
            'email' => 'ateeqadrees83@gmail.com',
            'title' => 'Test Subject',
            'message' => 'Test Message',
            'company_email' => env('MAIL_FM_FROM_ADDRESS'),
            'company' => env('MAIL_FROM_NAME'),
            'file_path'=>null
        ];

//         Mail::mailer('iadsr')->raw('This is the plain text email body.', function ($message) {
//     $message->to('ateeqadrees83@gmail.com')
//             ->subject('Simple Email');
// });

        // SendEmailJobFM::dispatch($details);
        // $phone_numbers=[
        //     '+923004330812',
        //     '+923318412731',
        //     '+923364786425'
        // ];

        // $delay=0;
        // foreach ($phone_numbers as $key => $phone_number) {
        //     $messageContent = [
        //         'phone_no' => preg_replace('/[^\p{L}\p{N}\s]/u', '', $phone_number).'@c.us',
        //         'message' => strip_tags('HI TEST MESSAGE FOR TESTING'),
        //     ];
        //     SendChatMessage::dispatch((object)$messageContent)->delay(now()->addSeconds($delay));
        //     $delay += 30;
        // }








      return  DB::table('jobs')->count();
    }
    public function sendEmail(Request $request)
    {
        if(DB::table('jobs')->count()>0){
            return response()->json([
                'message' => 'Email sending in progress!',
                'status' => false
            ]);
        }

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

            $file_path = 'https://iadsr.fissionmonster.com/uploads/'.$fileName;


        }
        $delay = 0;

        foreach($emails as $email){
            $details = [
            'email' => $email,
            'title' => $request['subject'],
            'message' => $request['message'],
            'company_email' => $request['company_email']??env('MAIL_FM_FROM_ADDRESS'),
            'company' => $request['company']??env('MAIL_FROM_NAME'),
            'file_path'=>$file_path
        ];

        if($request['company']==="Fission Monster"){

            SendEmailJobFM::dispatch($details);
        }elseif($request['company']==="IADSR"){

            SendEmailJob::dispatch($details);
        }else{
            SendEmailJobDental::dispatch($details);
        }

        $delay += 10;


        }
        // $data = new stdClass();
        // $data->type = "Email";
        // $data->company = $request['company'];
        // $data->date = Carbon::now();
        // $data->totalRecord = count($emails);

        // DataLog::saveLog($data);



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



    public function getStat(){
          $records=DataLog::where('date', '>=', Carbon::now()->subDays(30))
        ->where('type','Email')->get()->groupBy('company');

        $iadsr_monthly_email=0;
        $iadsr_weekly_email=0;
        $iadsr_daily_email=0;

        $iadsr_monthly_sms=0;
        $iadsr_weekly_sms=0;
        $iadsr_daily_sms=0;

        $fm_monthly_email=0;
        $fm_weekly_email=0;
        $fm_daily_email=0;

        $fm_monthly_sms=0;
        $fm_weekly_sms=0;
        $fm_daily_sms=0;

        $dental_services_monthly_email=0;
        $dental_services_weekly_email=0;
        $dental_services_daily_email=0;

        $dental_services_monthly_sms=0;
        $dental_services_weekly_sms=0;
        $dental_services_daily_sms=0;

        foreach ($records as $key => $record) {

            if($key==="IADSR"){
                $iadsr_monthly_email=DataLog::where('date', '>=', Carbon::now()->subDays(30))
                ->where('type','Email')->where('company',$key)->sum('totalRecord');
                $iadsr_weekly_email=DataLog::where('date', '>=', Carbon::now()->subDays(7))
                ->where('type','Email')->where('company',$key)->sum('totalRecord');
                $iadsr_daily_email=DataLog::whereDate('created_at', '=', Carbon::now()->toDateString())
                ->where('type','Email')->where('company',$key)->sum('totalRecord');

                $iadsr_monthly_sms=DataLog::where('date', '>=', Carbon::now()->subDays(30))
                ->where('type','Message')->where('company',$key)->sum('totalRecord');
                $iadsr_weekly_sms=DataLog::where('date', '>=', Carbon::now()->subDays(7))
                ->where('type','Message')->where('company',$key)->sum('totalRecord');
                $iadsr_daily_sms=DataLog::whereDate('created_at', '=', Carbon::now()->toDateString())
                ->where('type','Message')->where('company',$key)->sum('totalRecord');
            }
            if($key==="Fission Monster"){
                $fm_monthly_email=DataLog::where('date', '>=', Carbon::now()->subDays(30))
                ->where('type','Email')->where('company',$key)->sum('totalRecord');
                $fm_weekly_email=DataLog::where('date', '>=', Carbon::now()->subDays(7))
                ->where('type','Email')->where('company',$key)->sum('totalRecord');
                $fm_daily_email=DataLog::whereDate('created_at', '=', Carbon::now()->toDateString())
                ->where('type','Email')->where('company',$key)->sum('totalRecord');

                $fm_monthly_sms=DataLog::where('date', '>=', Carbon::now()->subDays(30))
                ->where('type','Message')->where('company',$key)->sum('totalRecord');
                $fm_weekly_sms=DataLog::where('date', '>=', Carbon::now()->subDays(7))
                ->where('type','Message')->where('company',$key)->sum('totalRecord');
                $fm_daily_sms=DataLog::whereDate('created_at', '=', Carbon::now()->toDateString())
                ->where('type','Message')->where('company',$key)->sum('totalRecord');
            }
            if($key==="Dental Services"){
                $dental_services_monthly_email=DataLog::where('date', '>=', Carbon::now()->subDays(30))
                ->where('type','Email')->where('company',$key)->sum('totalRecord');
                $dental_services_weekly_email=DataLog::where('date', '>=', Carbon::now()->subDays(7))
                ->where('type','Email')->where('company',$key)->sum('totalRecord');
                $dental_services_daily_email=DataLog::whereDate('created_at', '=', Carbon::now()->toDateString())
                ->where('type','Email')->where('company',$key)->sum('totalRecord');

                $dental_services_monthly_sms=DataLog::where('date', '>=', Carbon::now()->subDays(30))
                ->where('type','Message')->where('company',$key)->sum('totalRecord');
                $dental_services_weekly_sms=DataLog::where('date', '>=', Carbon::now()->subDays(7))
                ->where('type','Message')->where('company',$key)->sum('totalRecord');
                $dental_services_daily_sms=DataLog::whereDate('created_at', '=', Carbon::now()->toDateString())
                ->where('type','Message')->where('company',$key)->sum('totalRecord');
            }

        }

        return response()->json([
            'iadsr_monthly_email'=>$iadsr_monthly_email,
            'iadsr_weekly_email'=>$iadsr_weekly_email,
            'iadsr_daily_email'=>$iadsr_daily_email,
            'iadsr_monthly_sms'=>$iadsr_monthly_sms,
            'iadsr_weekly_sms'=>$iadsr_weekly_sms,
            'iadsr_daily_sms'=>$iadsr_daily_sms,

            'fm_monthly_email'=>$fm_monthly_email,
            'fm_weekly_email'=>$fm_weekly_email,
            'fm_daily_email'=>$fm_daily_email,
            'fm_monthly_sms'=>$fm_monthly_sms,
            'fm_weekly_sms'=>$fm_weekly_sms,
            'fm_daily_sms'=>$fm_daily_sms,

            'dental_services_monthly_email'=>$dental_services_monthly_email,
            'dental_services_weekly_email'=>$dental_services_weekly_email,
            'dental_services_daily_email'=>$dental_services_daily_email,
            'dental_services_monthly_sms'=>$dental_services_monthly_sms,
            'dental_services_weekly_sms'=>$dental_services_weekly_sms,
            'dental_services_daily_sms'=>$dental_services_daily_sms,
        ]);
    }
    public function getWPStatus(){
       return  $records=DataLog::where('date', '>=', Carbon::now()->subDays(30))->orderBy('date','desc')->get();


        $array = [
           [

                "date"=> "2025-02-10",
                "totalRecord"=> 50,
                "type"=> "Message",
                "company"=> "IADSR",

           ],
               [

                "date"=> "2025-02-11",
                "totalRecord"=> 50,
                "type"=> "Message",
                "company"=> "IADSR",

               ],
               [

                "date"=> "2025-02-18",
                "totalRecord"=> 50,
                "type"=> "Message",
                "company"=> "IADSR",

               ],
               [

                "date"=> "2025-02-20",
                "totalRecord"=> 50,
                "type"=> "Message",
                "company"=> "IADSR",

               ],
               [

                "date"=> "2025-02-20",
                "totalRecord"=> 50,
                "type"=> "Message",
                "company"=> "IADSR",

               ],
               [

                "date"=> "2025-02-21",
                "totalRecord"=> 50,
                "type"=> "Message",
                "company"=> "IADSR",

               ],
               [

                "date"=> "2025-02-24",
                "totalRecord"=> 50,
                "type"=> "Message",
                "company"=> "IADSR",

               ],
               [

                "date"=> "2025-02-25",
                "totalRecord"=> 50,
                "type"=> "Message",
                "company"=> "IADSR",

                ]

                ];

                DataLog::insert($array);



        $iadsr_monthly_email=0;
        $iadsr_weekly_email=0;
        $iadsr_daily_email=0;

        $iadsr_monthly_sms=0;
        $iadsr_weekly_sms=0;
        $iadsr_daily_sms=0;

        $fm_monthly_email=0;
        $fm_weekly_email=0;
        $fm_daily_email=0;

        $fm_monthly_sms=0;
        $fm_weekly_sms=0;
        $fm_daily_sms=0;

        $dental_services_monthly_email=0;
        $dental_services_weekly_email=0;
        $dental_services_daily_email=0;

        $dental_services_monthly_sms=0;
        $dental_services_weekly_sms=0;
        $dental_services_daily_sms=0;

        foreach ($records as $key => $record){

            if($key==="IADSR"){
                $iadsr_monthly_email=DataLog::where('date', '>=', Carbon::now()->subDays(30))
                ->where('type','Email')->where('company',$key)->sum('totalRecord');
                $iadsr_weekly_email=DataLog::where('date', '>=', Carbon::now()->subDays(7))
                ->where('type','Email')->where('company',$key)->sum('totalRecord');
                $iadsr_daily_email=DataLog::whereDate('created_at', '=', Carbon::now()->toDateString())
                ->where('type','Email')->where('company',$key)->sum('totalRecord');

                $iadsr_monthly_sms=DataLog::where('date', '>=', Carbon::now()->subDays(30))
                ->where('type','Message')->where('company',$key)->sum('totalRecord');
                $iadsr_weekly_sms=DataLog::where('date', '>=', Carbon::now()->subDays(7))
                ->where('type','Message')->where('company',$key)->sum('totalRecord');
                $iadsr_daily_sms=DataLog::whereDate('created_at', '=', Carbon::now()->toDateString())
                ->where('type','Message')->where('company',$key)->sum('totalRecord');
            }
            if($key==="Fission Monster"){
                $fm_monthly_email=DataLog::where('date', '>=', Carbon::now()->subDays(30))
                ->where('type','Email')->where('company',$key)->sum('totalRecord');
                $fm_weekly_email=DataLog::where('date', '>=', Carbon::now()->subDays(7))
                ->where('type','Email')->where('company',$key)->sum('totalRecord');
                $fm_daily_email=DataLog::whereDate('created_at', '=', Carbon::now()->toDateString())
                ->where('type','Email')->where('company',$key)->sum('totalRecord');

                $fm_monthly_sms=DataLog::where('date', '>=', Carbon::now()->subDays(30))
                ->where('type','Message')->where('company',$key)->sum('totalRecord');
                $fm_weekly_sms=DataLog::where('date', '>=', Carbon::now()->subDays(7))
                ->where('type','Message')->where('company',$key)->sum('totalRecord');
                $fm_daily_sms=DataLog::whereDate('created_at', '=', Carbon::now()->toDateString())
                ->where('type','Message')->where('company',$key)->sum('totalRecord');
            }
            if($key==="Dental Services"){
                $dental_services_monthly_email=DataLog::where('date', '>=', Carbon::now()->subDays(30))
                ->where('type','Email')->where('company',$key)->sum('totalRecord');
                $dental_services_weekly_email=DataLog::where('date', '>=', Carbon::now()->subDays(7))
                ->where('type','Email')->where('company',$key)->sum('totalRecord');
                $dental_services_daily_email=DataLog::whereDate('created_at', '=', Carbon::now()->toDateString())
                ->where('type','Email')->where('company',$key)->sum('totalRecord');

                $dental_services_monthly_sms=DataLog::where('date', '>=', Carbon::now()->subDays(30))
                ->where('type','Message')->where('company',$key)->sum('totalRecord');
                $dental_services_weekly_sms=DataLog::where('date', '>=', Carbon::now()->subDays(7))
                ->where('type','Message')->where('company',$key)->sum('totalRecord');
                $dental_services_daily_sms=DataLog::whereDate('created_at', '=', Carbon::now()->toDateString())
                ->where('type','Message')->where('company',$key)->sum('totalRecord');
            }

        }

        return response()->json([
            'iadsr_monthly_email'=>$iadsr_monthly_email,
            'iadsr_weekly_email'=>$iadsr_weekly_email,
            'iadsr_daily_email'=>$iadsr_daily_email,
            'iadsr_monthly_sms'=>$iadsr_monthly_sms,
            'iadsr_weekly_sms'=>$iadsr_weekly_sms,
            'iadsr_daily_sms'=>$iadsr_daily_sms,

            'fm_monthly_email'=>$fm_monthly_email,
            'fm_weekly_email'=>$fm_weekly_email,
            'fm_daily_email'=>$fm_daily_email,
            'fm_monthly_sms'=>$fm_monthly_sms,
            'fm_weekly_sms'=>$fm_weekly_sms,
            'fm_daily_sms'=>$fm_daily_sms,

            'dental_services_monthly_email'=>$dental_services_monthly_email,
            'dental_services_weekly_email'=>$dental_services_weekly_email,
            'dental_services_daily_email'=>$dental_services_daily_email,
            'dental_services_monthly_sms'=>$dental_services_monthly_sms,
            'dental_services_weekly_sms'=>$dental_services_weekly_sms,
            'dental_services_daily_sms'=>$dental_services_daily_sms,
        ]);
    }
}
