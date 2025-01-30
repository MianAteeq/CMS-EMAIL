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

      return  DB::table('jobs')->get();
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
