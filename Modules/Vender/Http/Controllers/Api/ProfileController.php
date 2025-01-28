<?php

namespace Modules\Vender\Http\Controllers\Api;

use File;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Modules\Admin\Entities\FAQ;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Setting;
use Spatie\Permission\Models\Permission;
use Modules\Vender\Entities\VendorProfile;
use Illuminate\Contracts\Support\Renderable;
use stdClass;

class ProfileController extends Controller
{
   public function getProfile(Request $request)
   {

      $auth_id=$request->user()->id;


        $user = User::with('payment_methods', 'quick_products', 'vender_services', 'vehicle_specialists', 'warranty_jobs', 'accreditation_schemes', 'profile','trading_unit','trading_unit.trading_name','trading_unit.app_setting')->find($auth_id);



        if($user['vender_id']==0 ){
            $permissions=Permission::where('group_type','APP')->pluck('name');
        }else{

            $permissions=collect($user['provider_app']['group']['permissions'])->pluck('name');
        }


        return response()->json([
            'status' => true,
            'profile' => $user,
            'permissions'=>$permissions,
            'message' => "Profile Fetch Successfully",
        ]);
   }
   public function getOtherSetting(Request $request)
   {


    $about=Setting::where('key', 'aboutDescription')->first()['value'];
        $privacy_policy=Setting::where('key', 'privacy_policy')->first()['value'];

        return response()->json([
            'status' => true,
            'about' => $about,
            'privacy_policy' => $privacy_policy,
            'message' => "Privacy and About us Fetch Successfully",
        ]);
   }
   public function getFAQ(Request $request)
   {

      $faqs=FAQ::all();

        return response()->json([
            'status' => true,
            'faqs' => $faqs,
            'message' => "FAQ Fetch Successfully",
        ]);
   }


   public function profileUpdate(Request $request)
   {

        $validator = \Validator::make($request->all(), [
            'name' =>  ['required'],
            'last_name' =>  ['required'],
            'email' => 'required|unique:users,email,' . $request->user()->id,
            'phone_no' =>  ['required'],

        ]);

        if ($validator->fails()) {

            $responseArr['message'] = $validator->errors()->first();
            $responseArr['token'] = '';
            return response()->json($responseArr);
        }


        $file = null;
        if ($request->profile_pic) {

            $img = $request->profile_pic;
            $folderPath = "profile/";

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

        User::find($request->user()->id)->update([

            'name'=>$request['name'],
            'last_name'=>$request['last_name'],
            'email'=>$request['email'],
            'profile_pic'=> $file,

        ]);

        VendorProfile::where('vender_id', $request->user()->id)->update([
            'phone_no'=>$request['phone_no'],
        ]);

        $user = User::with('payment_methods', 'quick_products', 'vender_services', 'vehicle_specialists', 'warranty_jobs', 'accreditation_schemes', 'profile')->find($request->user()->id);

        if($user['profile_pic']!=null){

            $user['profile_pic']=asset('/'). $user['profile_pic'];
        }

        return response()->json([
            'status' => true,
            'profile' => $user,
            'message' => "Profile Has Been Successfully",
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

            $client =  User::find($request->user()->id);

            $client->token = $request['token'];
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
}
