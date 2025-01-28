<?php

namespace Modules\ClientHub\Http\Controllers;

use App\Models\UserOtp;
use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Modules\ClientHub\Entities\Client;

class LoginController extends Controller
{
    /***************  Login Api For Client Hub  *************/

    public function login(Request $request)
    {


        try {
            $validator = \Validator::make($request->all(), [
                'email' =>  ['required', 'string', 'max:255'],
                'password' => 'required',


            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }



            $credentials = request(['email', 'password']);

            // if (!Auth::guard('client')->attempt($credentials)) {
            //     return response()->json([
            //         'status' => false,
            //         'message' => 'Invalid Credentials',

            //     ]);
            // }

            $user = Client::where('email', $request->email)->first();
            if(isset($user)){
               if($user->status==0){
                return response()->json([
                    'status' => false,
                    // 'error' => $e->getMessage(),
                    'message' => "No Record Found!",
                ]);
               }
            }

            if(isset($request['lat'])){
                Client::find($user['id'])->update([
                    'lat'=>$request['lat'],
                    'long'=>$request['lon']
                ]);
            }

            if(!isset($user)){
                return response()->json([
                    'status' => false,
                    // 'error' => $e->getMessage(),
                    'message' => "No Record Found!",
                ]);
            }


            // if (!Hash::check($request->password, $user['password'], [])) {
            //     throw new \Exception('Error in Login');
            // }
            // if (Auth::guard('client')->attempt($credentials)) {




            // }
            $tokenResult = $user->createToken('authToken')->plainTextToken;

            return response()->json([
                'status' => true,
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Login",
            ]);
        }
    }
    public function inActive(Request $request)
    {


        try {




            $user = Client::find($request->user()->id);
            if(isset($user)){
              $user->status=0;
              $user->update();
            }






            return response()->json([
                'status' => true,
                'message'=>"User Delete Successfully",
                'user' => $user
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while User Delete",
            ]);
        }
    }

    /***************  Register Api For Client Hub  *************/

    public function register(Request $request)
    {


        try {
            $validator = \Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'phone_no' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:clients'],
                'password' => 'required|confirmed|min:6',


            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }

          $client=Client::create([
                'name'=>$request['name'],
                'phone_no'=>$request['phone_no'],
                'email'=>$request['email'],
                'password'=>Hash::make($request['password']),
                'lat'=>0,
                'long'=>0,
            ]);


            return response()->json([
                'status' => true,
                'client' => $client,
                'message'=>'Client Register Successfully'
            ]);




        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Register",
            ]);
        }
    }


    public function sendOtp(Request $request)
    {
        // return $request->all();
        $validator = \Validator::make($request->all(), [

            'email' => ['required'],
        ]);

        if ($validator->fails()) {

            $responseArr['message'] = $validator->errors()->first();
            $responseArr['token'] = '';
            return response()->json($responseArr);
        }
        $otp = rand(1000, 9999);
        $user = Client::where('email', '=', $request->email)->first();

        if ($user) {
            UserOtp::where('user_id', $user['id'])->delete();
            UserOtp::create([
                'user_id' => $user['id'],
                'otp' => $otp

            ]);

            $mail_details = [
                'subject' => 'Register OTP',
                'body' => 'Your OTP is : ' . $otp,
            ];

            Mail::send('email.otp', get_defined_vars(), function ($send) use ($request) {
                $send->to($request['email'])->subject("Otp Email");
            });


            return response(["status" => true, "message" => "OTP sent successfully"]);
        } else {
            return response(["status" => false, 'message' => 'Invalid']);
        }
    }

    /***************  Verify Otp  *************/

    public function verifyOtp(Request $request)
    {
        try {


            $validator = \Validator::make($request->all(), [

                'email' => ['required'],
                'otp' => ['required'],
            ]);
            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }

            $user = Client::where([['email', '=', $request->email]])->first();

            if ($user) {

                $user_otp = UserOtp::where('user_id', $user['id'])->where('otp', $request['otp'])->first();

                if ($user_otp) {
                    $accessToken = $user->createToken('authToken')->plainTextToken;

                    $user = Client::find($user['id']);

                    return response(["status" => true, "message" => "Otp Verified Successfully", 'user' => $user, 'access_token' => $accessToken]);
                } else {
                    return response(["status" => false, 'message' => 'Invalid Otp']);
                }
            } else {
                return response(["status" => false, 'message' => 'Invalid Otp']);
            }
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Verify Otp",
            ]);
        }
    }
    /***************  Update Password  *************/




    public function updatePassword(Request $request)
    {
        // return $request->all();
        try {



            $validator = \Validator::make($request->all(), [
                'password' => ['required', 'string', 'min:8', 'confirmed'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }

            // return $request->user();

            $user = Client::find($request->user()->id)->update([

                'password' => Hash::make($request['password']),
            ]);


            return response()->json([
                'status' => true,
                'message' => "Password Update Successfully"
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Update Password",
            ]);
        }
    }
    public function deleteAccount(Request $request)
    {
        // return $request->all();
        try {





            $user = Client::find($request->user()->id)->update([

                'status' =>0,
            ]);


            return response()->json([
                'status' => true,
                'message' => "Account has been Deleted"
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while deleteAccount",
            ]);
        }
    }
}
