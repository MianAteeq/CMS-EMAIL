<?php

namespace Modules\Vender\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Modules\Vender\Entities\UserApp;
use Modules\Vender\Entities\TradingUnit;
use Modules\Vender\Entities\VendorProfile;
use Illuminate\Contracts\Support\Renderable;
use Modules\Vender\Entities\UserTradingUnit;

class UserController extends Controller
{
    public function user()  {


        $user=auth()->user();

        $vender_id=0;

        if($user['vender_id']==0){
            $vender_id=$user['id'];
        }else{
            $vender_id=$user['vender_id'];
        }

        $users=User::where('vender_id',$vender_id)->whereIn('type',['App','Manager'])->get();

        return view('vender::business.users.index',get_defined_vars());

    }
    public function userView($id)  {


        $user=User::find($id);

        return view('vender::business.users.view',get_defined_vars());

    }


    public function userInformation($id)  {


        $user=User::find($id);

        return view('vender::business.users.user_information',get_defined_vars());

    }
    public function userApp($id)  {


        $user=User::find($id);

        $is_edit_able="on";

        if(isset($user->profile->package)){

            $package_name=$user->profile->package['name'];

            if($package_name=="Advertise only"){
                $is_edit_able="off";
            }


            }

        if(count($user['apps'])==0){
            UserApp::create([
                'app_name'=>'Service Provider',
                'status'=>$is_edit_able=="off"?0:1,
                'vender_id'=>$user['id'],
               ]);
               UserApp::create([
                'app_name'=>'Business Manager',
                'status'=>1,
                'vender_id'=>$user['id'],
               ]);


        }

        $apps=UserApp::where('vender_id',$user['id'])->get();

        return view('vender::business.users.user_app',get_defined_vars());

    }

    public function userEdit($id)  {


        $user=User::find($id);



        return view('vender::business.users.edit',get_defined_vars());

    }

    public function userPassword($id)  {


        $user=User::find($id);

        return view('vender::business.users.password',get_defined_vars());

    }

    public function addUser()  {


        $user=auth()->user();

        return view('vender::business.users.add',get_defined_vars());

    }
    public function storeUser(Request $request)  {

        $user=auth()->user();
        $request->validate([
            'email' => ['required',Rule::unique('users')],
        ]);




     $user_new=User::create([

        'name'=>$request['name'],
        'middle_name'=>$request['middle_name'],
        'last_name'=>$request['last_name'],
        'email'=>$request['email'],
        'vender_id'=>$user['id'],
        'phone_no'=>$request['phone_no'],
        'landline'=>$request['landline'],
        'type'=>'App',
        'application_status'=>'ACCEPTED'
       ]);

       UserApp::create([
        'app_name'=>'Service Provider',
        'status'=>0,
        'vender_id'=>$user_new['id'],
       ]);
       UserApp::create([
        'app_name'=>'Business Manager',
        'status'=>0,
        'vender_id'=>$user_new['id'],
       ]);







        return  redirect()->route('vender.user');

    }
    public function updateUser(Request $request)  {

        $user=User::find($request['id']);
        $request->validate([
            'email' => ['required',Rule::unique('users')->ignore($user->id)],
        ]);


        if(auth()->user()->id==$user['id']){

            User::find($user['id'])->update([

                'name'=>$request['name'],
                'middle_name'=>$request['middle_name'],
                'last_name'=>$request['last_name'],
                'email'=>$request['email'],


               ]);


               VendorProfile::where('vender_id',$user['id'])->update([
                'phone_no'=>$request['phone_no'],
                'landline'=>$request['landline'],
               ]);

        }else{
            User::find($user['id'])->update([

                'name'=>$request['name'],
                'middle_name'=>$request['middle_name'],
                'last_name'=>$request['last_name'],
                'email'=>$request['email'],
                'phone_no'=>$request['phone_no'],
                'landline'=>$request['landline'],
                'type'=>'App',
                 'application_status'=>'ACCEPTED'
               ]);
        }












        return  redirect()->route('vender.user');

    }

    public function userAppView($id)  {
        $auth=auth()->user();
        $vender_id=0;

        if($auth['vender_id']==0){
            $vender_id=$auth['id'];
        }else{
            $vender_id=$auth['vender_id'];
        }

        $app=userApp::find($id);
        $user=User::with('trading_units')->find($app['vender_id']);



       $units=UserTradingUnit::where('user_id',$user['id'])->get();

        return view('vender::business.users.app.view',get_defined_vars());

    }
    public function userAppEdit($id)  {
        $auth=auth()->user();
        $vender_id=0;

        if($auth['vender_id']==0){
            $vender_id=$auth['id'];
        }else{
            $vender_id=$auth['vender_id'];
        }



         $app=UserApp::find($id);
         $user=User::find($app['vender_id']);
         $units=UserTradingUnit::where('user_id',$user['id'])->get();

         $is_edit_able="on";



        if($app['app_name']=="Service Provider"){

            $roles=Role::where('vender_id',$user['vender_id']==0?$user['id']:$user['vender_id'])->where('type','APP')->get();
            $trade_units=TradingUnit::where('vender_id',$user['vender_id']==0?$user['id']:$user['vender_id'])->get();



            if(isset($user->profile->package)){

            $package_name=$user->profile->package['name'];

            if($package_name=="Advertise only"){
                $is_edit_able="off";
            }


            }
        }else{
            $roles=Role::where('vender_id',$user['vender_id']==0?$user['id']:$user['vender_id'])->where('type','BUSINESS')->get();

            $trade_units=TradingUnit::where('vender_id',$user['vender_id']==0?$user['id']:$user['vender_id'])->get();

        }


        // return get_defined_vars();





        return view('vender::business.users.app.app_edit',get_defined_vars());

    }
    public function userAppUpdate(Request $request)  {


        // return $request;

       UserApp::find($request['id'])->update([
        'status'=>$request['status'],
        'role_id'=>$request['role_id']
       ]);
       $user=UserApp::find($request['id']);

       $user_new=User::find($user['vender_id']);

     if(isset($request['trade_unit'])) {
        UserTradingUnit::where('user_id',$user_new['id'])->delete();
         foreach ($request['trade_unit'] as $key => $trade_unit) {

            UserTradingUnit::create([
                'user_id'=>$user_new['id'],
                'trading_id'=>$trade_unit

            ]);
       }
    }

    if(isset($request['default_trading_unit'])){
        User::find($user_new['id'])->update([
            'default_trading_unit'=>$request['default_trading_unit']
        ]);
    }



       return  redirect()->route('vender.user.app.view',$user['id']);
    }


    public function passwordChange(Request $request) {
        $user = User::find($request->id);





        // return $request;
        $validatedData = $request->validate([
            'password' => 'required|string|confirmed',
        ]);

        $user->password = Hash::make($validatedData['password']);
        $user->update();

       return redirect()->back()->withSuccess('Password Reset Successfully');
    }

    public function userSuspend($id) {
        $user = User::find($id);


        $user->status="SUSPEND";

        $user->update();

       return redirect()->back()->withSuccess('User Suspend Successfully');
    }
    public function userActive($id) {
        $user = User::find($id);


        $user->status="ACTIVE";

        $user->update();

       return redirect()->back()->withSuccess('User ACTIVE Successfully');
    }
    public function userInActive($id) {
        $user = User::find($id);


        $user->status="INACTIVE";

        $user->update();

       return redirect()->back()->withSuccess('User INACTIVE Successfully');
    }
}
