<?php

namespace Modules\Vender\Http\Controllers\Api;

use Exception;
use App\Models\User;
use App\Models\UserOtp;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Modules\Vender\Entities\TradingUnit;
use Spatie\Permission\Models\Permission;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{



    /***************  Login Api For Service Provider  *************/

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



            $user = User::where('email', $request->email)->with('trading_unit')->first();

            if ($user==null) {
                return response()->json([
                    'status' => false,
                    'message' => 'Record Not Found!',

                ]);
            }
            if ($user->status == "PENDING" || $user->status == "INACTIVE") {
                return response()->json([
                    'status' => false,
                    'message' => 'Your are not Active User',

                ]);
            }

            $tokenResult = $user->createToken('authToken')->plainTextToken;

            if($user['vender_id']==0){

                $vender_id=0;

                if($user['vender_id']==0){

                    $vender_id=$user['id'];
                }else{
                    $vender_id=$user['vender_id'];
                }



            $trading_units=TradingUnit::where('vender_id',$vender_id)->with('trading_name')->get();
            $trading_unit=0;
            if(count($trading_units)>0){
                $trading_unit=$trading_units[0]['id'];
            }


            if(isset($request['lat'])){
                User::find($user['id'])->update([
                    'lat'=>$request['lat'],
                    'long'=>$request['lon'],
                    'default_trading_unit'=>$user['default_trading_unit']==0?$trading_unit:$user['default_trading_unit'],
                ]);

            }

            if($user['default_trading_unit']==0){
                User::find($user['id'])->update([

                    'default_trading_unit'=>$user['default_trading_unit']==0?$trading_unit:$user['default_trading_unit'],
                ]);
            }





            $user = User::where('email', $request->email)->with('trading_unit')->with('trading_unit.trading_name')->first();

        }
        else{
            if(!isset($user['provider_app'])){
                return response()->json([
                    'status' => false,
                    'message' => "You don't have app access",

                ]);
            }
            if($user['provider_app']['status']==0){
                return response()->json([
                    'status' => false,
                    'message' => "You don't have app access",

                ]);
            }
            $user_trading_id=collect($user['trading_units'])->pluck('trading_id');
            $trading_units=TradingUnit::whereIn('id',$user_trading_id)->with('trading_name')->get();
            $trading_unit=0;
            if(count($trading_units)>0){
                $trading_unit=$trading_units[0]['id'];
            }


            if(isset($request['lat'])){
                User::find($user['id'])->update([
                    'lat'=>$request['lat'],
                    'long'=>$request['lon'],
                    'default_trading_unit'=>$user['default_trading_unit']==0?$trading_unit:$user['default_trading_unit'],
                ]);

            }
            else{
                User::find($user['id'])->update([

                    'default_trading_unit'=>$user['default_trading_unit']==0?$trading_unit:$user['default_trading_unit'],
                ]);
            }


            $user = User::where('email', $request->email)->with('trading_unit')->with('trading_unit.trading_name')->first();

        }
        if($user['vender_id']==0){
            $permissions=Permission::where('group_type','APP')->pluck('name');
        }else{


            // return $user['provider_app'];

            if($user['provider_app']['status']==0){
                return response()->json([
                    'status' => false,
                    'message' => "You don't have app access",

                ]);
            }else{

                $permissions=collect($user['provider_app']['group']['permissions'])->pluck('name');
            }

        }
            return response()->json([
                'status' => true,
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user,
                'permissions' => $permissions,
                'trading_units'=>$trading_units


            ]);

        } catch (Exception $e) {

            // Log::info($e->getMessage());
            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => $e->getMessage(),
            ]);

        }
    }
    /***************  Login Api For Service Provider  *************/

    public function deleteAccount(Request $request)
    {


        try {



            $user = User::find($request->user()->id);

            $user->status="INACTIVE";
            $user->update();

            return response()->json([
                'status' => true,
                'user'=>$user,
                'message' => 'Account Delete Successfully',

            ]);




        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Login",
            ]);
        }
    }


    public function fetchTradingUnit(Request $request) {

        $user = User::find($request->user()->id);

        if($user['vender_id']==0 || $user['type']=="Manager"){

            $vender_id=0;

            if($user['vender_id']==0){

                $vender_id=$user['id'];
            }else{
                $vender_id=$user['vender_id'];
            }


            $trading_units=TradingUnit::where('vender_id',$vender_id)->with('trading_name')->get();
        }else{
            $user_trading_id=collect($user['trading_units'])->pluck('trading_id');
            $trading_units=TradingUnit::whereIn('id',$user_trading_id)->with('trading_name')->get();
        }


        if(count($trading_units)>0){
            return response()->json([
                'status' => true,

                'trading_units'=>$trading_units
            ]);

        }
        else{

            return response()->json([
                'status' => true,
                 'message'=>'Record Not Found',
                'trading_units'=>$trading_units
            ]);
        }

    }
    public function setTradingUnit(Request $request) {

        $validator = \Validator::make($request->all(), [

            'trading_id' => ['required']
        ]);
        if ($validator->fails()) {

            $responseArr['message'] = $validator->errors()->first();
            $responseArr['token'] = '';
            return response()->json($responseArr);
        }

        $user = User::find($request->user()->id)->update([
            'default_trading_unit'=>$request['trading_id']
        ]);

        return response()->json([
            'status' => true,
            'message'=>'Default Trading Unit Set Successfully!'
        ]);

    }


    /***************  Send Otp  *************/

    public function sendOtp(Request $request)
    {
        $validator = \Validator::make($request->all(), [

            'email' => ['required'],
        ]);

        if ($validator->fails()) {

            $responseArr['message'] = $validator->errors()->first();
            $responseArr['token'] = '';
            return response()->json($responseArr);
        }
        $otp = rand(1000, 9999);
        $user = User::where('email', '=', $request->email)->first();

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

            $user = User::where([['email', '=', $request->email]])->first();

            if ($user) {

                $user_otp = UserOtp::where('user_id', $user['id'])->where('otp', $request['otp'])->first();

                if ($user_otp) {
                    $accessToken = $user->createToken('authToken')->plainTextToken;

                    $user = User::find($user['id']);

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
        try {

            $validator = \Validator::make($request->all(), [
                'password' => ['required', 'string', 'min:8', 'confirmed'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }

            $user = User::find($request->user()->id)->update([

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
}
