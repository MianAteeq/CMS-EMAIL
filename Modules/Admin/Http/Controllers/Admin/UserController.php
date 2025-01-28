<?php

namespace Modules\Admin\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;
use Modules\Vender\Entities\ContactDetail;

class UserController extends Controller
{
    public function index()
    {
        $clients=Admin::orderBy('id','desc')->get();

        return view('admin::admin.user.index',get_defined_vars());
    }

    public function add(Request $request)
    {
        $roles=Role::where('type','ADMIN')->get();
        return view('admin::admin.user.add',get_defined_vars());
    }

    public function store(Request $request)  {

        $user=auth()->user();
        $request->validate([
            'email' => ['required',Rule::unique('admins')],
        ]);




     $user_new=Admin::create([

        'name'=>$request['name'],
        'middle_name'=>$request['middle_name'],
        'last_name'=>$request['last_name'],
        'email'=>$request['email'],
        'phone_no'=>$request['phone_no'],
        'landline_no'=>$request['landline'],
        'password'=>Hash::make(12345678)
       ]);

       $user_new->assignRole($request['role_id']);




       Session::Flash('success','User Create Successfully');



        return  redirect()->route('admin.users');

    }

    public function update(Request $request)  {

        $user=Admin::find($request['id']);
        $request->validate([
            'email' => ['required',Rule::unique('admins')->ignore($user->id)],
        ]);




     $user_new=Admin::find($request['id'])->update([

        'name'=>$request['name'],
        'middle_name'=>$request['middle_name'],
        'last_name'=>$request['last_name'],
        'email'=>$request['email'],
        'phone_no'=>$request['phone_no'],
        'landline_no'=>$request['landline']
       ]);


       $user->syncRoles($request['role_id']);




       Session::Flash('success','User Update Successfully');



        return  redirect()->route('admin.users');

    }

    public function edit($id)
    {

        $user=Admin::find($id);



        $roles=Role::where('type','ADMIN')->get();
        return view('admin::admin.user.edit',get_defined_vars());
    }
    public function view($id)
    {

        $user=Admin::find($id);
     return view('admin::admin.user.view',get_defined_vars());
    }
    public function password($id)
    {

        $user=Admin::find($id);

        return view('admin::admin.user.reset_password',get_defined_vars());
    }


    public function passwordChange(Request $request) {
        $user = Admin::find($request->id);





        // return $request;
        $validatedData = $request->validate([
            'password' => 'required|string|confirmed',
        ]);

        $user->password = Hash::make($validatedData['password']);
        $user->update();

       return redirect()->back()->withSuccess('Password Reset Successfully');
    }

    public function userSuspend($id) {
        $user = Admin::find($id);


        $user->status=3;

        $user->update();

       return redirect()->back()->withSuccess('User Suspend Successfully');
    }
    public function userActive($id) {
        $user = Admin::find($id);


        $user->status=1;

        $user->update();

       return redirect()->back()->withSuccess('User ACTIVE Successfully');
    }
    public function userInActive($id) {
        $user = Admin::find($id);


        $user->status=0;

        $user->update();

       return redirect()->back()->withSuccess('User INACTIVE Successfully');
    }
}
