<?php

namespace Modules\ClientHub\Http\Controllers;

use File;
use stdClass;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\ClientHub\Entities\Client;
use Modules\Vender\Entities\TradingUnit;
use Modules\ClientHub\Entities\LinkVender;
use Illuminate\Contracts\Support\Renderable;

class ProfileController extends Controller
{
    public function getProfile(Request $request)
    {

        $auth_id = $request->profile_id;

        $latitude=$request->user()->lat;
        $longtitude=$request->user()->long;


        $user =TradingUnit::where('status','ACTIVE')->with('vender')->with(['hub_setting','site','trading_name','job_types.job_type','payment_methods.payment_method','product_offers','vehicle_specialists.vehicle_specialist','accreditations.accreditation','warranty_jobs.warranty_job']) ->select("trading_units.*" ,DB::raw("3959* acos(cos(radians(" . $latitude . "))
        * cos(radians(trading_units.lat))
       * cos(radians(trading_units.long) - radians(" . $longtitude . "))
        + sin(radians(" .$latitude. "))
        * sin(radians(trading_units.lat))) AS distance"))->find($auth_id);

       $array=collect($user['job_types']);

       $vender_services=[];
       foreach ($array as $key => $value) {

        $data=new stdClass();
        $data=$value['job_type'];
        $data->child=[];

        array_push($vender_services,$data);

       }


    //    $user->vender_services=$vender_services;

        $linked = LinkVender::where('vender_id', $auth_id)->where('hub_id', $request->user()->id)->first();

        if(isset($linked)){

            $user['is_linked']=1;

        }else{
            $user['is_linked'] = 0;
        }


        return response()->json([
            'status' => true,
            'profile' => $user,
            'vender_services'=>$vender_services,
            'message' => "Profile Fetch Successfully",
        ]);
    }

    public function fetchProfile(Request $request)
    {

        $auth_id = $request->user()->id;


        $user = Client::find($auth_id);



        return response()->json([
            'status' => true,
            'profile' => $user,
            'message' => "Profile Fetch Successfully",
        ]);
    }

    public function updateToken(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'token' =>  ['required'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }

          $client=  Client::find($request->user()->id);

            $client->token=$request['token'];
            $client->save();



            return response()->json([
                'status' => true,

                'message' => "Token Save Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Add Token",
            ]);
        }

    }
    public function updateLatLong(Request $request)
    {

        try {



          $client=  Client::find($request->user()->id);

            $client->lat=$request['lat']??0;
            $client->long=$request['lon']??0;
            $client->location=$request['location']??'';
            $client->update();



            return response()->json([
                'status' => true,

                'message' => "Lat Long Update Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Add Lat Long",
            ]);
        }

    }

    public function updateProfile(Request $request)
    {

        // return $request;
        try {
            $validator = \Validator::make($request->all(), [
                'path' =>  ['required'],
                'email' => 'required|unique:clients,email,'.$request->user()->id,
                'name' =>  ['required'],


            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }
            $client=  Client::find($request->user()->id);
            $file=$client['profile_pic'];
            if ($request['is_Update']==true) {
            if ($request['path']) {

                $img = $request['path'];
                $folderPath = "images/";

                if (!File::exists($folderPath)) {
                    File::makeDirectory($folderPath, $mode = 0777, true, true);
                }

                 $image_parts = explode(";base64,", $img);
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);
                $uniqid = uniqid();
                  $file = $folderPath . $uniqid . '.' . $image_type;
                file_put_contents($file, $image_base64);


            }
            }



            $client->profile_pic=$file;
            $client->name=$request['name'];
            $client->phone_no=$request['phone_no'];
            $client->email=$request['email'];
            $client->update();



            return response()->json([
                'status' => true,

                'message' => "Profile Update Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Add Token",
            ]);
        }

    }
}
