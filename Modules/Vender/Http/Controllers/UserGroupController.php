<?php

namespace Modules\Vender\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Contracts\Support\Renderable;

class UserGroupController extends Controller
{
    public function appSetting() {

        $user=auth()->user();



        return view('vender::manager.app_setting.index',get_defined_vars());
    }

    public function userGroup() {

        $user=auth()->user();
        $vender_id=0;

        if($user['vender_id']==0){
            $vender_id=$user['id'];
        }else{
            $vender_id=$user['vender_id'];
        }
        if(Role::where('vender_id',$vender_id)->where('type','BUSINESS')->where('group_type','System Default')->count()==0){
        createPermissionServiceBusiness();

        }
        $roles=Role::where('vender_id',$vender_id)->where('type','BUSINESS')->orderBy('group_type','desc')->get();



        return view('vender::manager.app_setting.user_group.index',get_defined_vars());
    }

    public function userGroupEdit($id) {

        $user=auth()->user();
        $vender_id=0;

        if($user['vender_id']==0){
            $vender_id=$user['id'];
        }else{
            $vender_id=$user['vender_id'];
        }
        $role=Role::find($id);
        $permissions=Permission::where('group_type','BUSINESS')->get()->groupBy('type');



        return view('vender::manager.app_setting.user_group.edit',get_defined_vars());
    }
    public function userGroupView($id) {

        $user=auth()->user();
        $vender_id=0;

        if($user['vender_id']==0){
            $vender_id=$user['id'];
        }else{
            $vender_id=$user['vender_id'];
        }
        $role=Role::find($id);

        $permissions=collect($role['permissions'])->groupBy('type');


        return view('vender::manager.app_setting.user_group.view',get_defined_vars());
    }

    public function addUserGroup() {


        $permissions=Permission::where('group_type','BUSINESS')->get()->groupBy('type');


        return view('vender::manager.app_setting.user_group.add',get_defined_vars());
    }

    public function storeUserGroup (Request $request)  {
        $user=auth()->user();
        $vender_id=0;

        if($user['vender_id']==0){
            $vender_id=$user['id'];
        }else{
            $vender_id=$user['vender_id'];
        }
        $request['name']=$request['name']."SVP_B_".$vender_id;
        $request->validate([
            'name' => ['required', 'string','max:255','unique:roles'],
        ]);


      $role=Role::create([
        'name'=>$request['name'],
        'group_type'=>'Custom',
        'type'=>'BUSINESS',
        'vender_id'=>$vender_id,
      ]);


      $role->syncPermissions($request['permission_id']);

      return redirect()->route('vender.user.group');




    }

    public function updateUserGroup (Request $request)  {
        $user=auth()->user();
        $vender_id=0;

        if($user['vender_id']==0){
            $vender_id=$user['id'];
        }else{
            $vender_id=$user['vender_id'];
        }
        $request['name']=$request['name']."SVP_B_".$vender_id;
        $request->validate([
            'name' => 'required|unique:roles,name,' . $request->id,
        ]);

        $user=auth()->user();
        $vender_id=0;

        if($user['vender_id']==0){
            $vender_id=$user['id'];
        }else{
            $vender_id=$user['vender_id'];
        }

      $role=Role::find($request['id'])->update([
        'name'=>$request['name']."SVP_B_".$vender_id,
        // 'group_type'=>'Custom',
         'type'=>'BUSINESS',
        // 'vender_id'=>auth()->user()->id
      ]);

      $roles=Role::find($request['id']);

      $roles->revokePermissionTo($roles['permissions']);
      $roles->syncPermissions($request['permission_id']);

      return redirect()->route('vender.user.group');




    }
}
