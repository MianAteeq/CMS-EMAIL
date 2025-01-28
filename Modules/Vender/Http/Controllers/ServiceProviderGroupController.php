<?php

namespace Modules\Vender\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Contracts\Support\Renderable;

class ServiceProviderGroupController extends Controller
{
    public function appSetting() {

        $user=auth()->user();



        return view('vender::service_provider.app_setting.index',get_defined_vars());
    }

    public function userGroup() {

        $user=auth()->user();
        $vender_id=0;

        if($user['vender_id']==0){
            $vender_id=$user['id'];
        }else{
            $vender_id=$user['vender_id'];
        }


        if(Role::where('vender_id',$vender_id)->where('group_type','System Default')->where('type','APP')->count()==0){

            createPermissionServiceProvider();
        }


        $roles=Role::where('vender_id',$vender_id)->where('type','APP')->orderBy('group_type','desc')->get();



        return view('vender::service_provider.app_setting.user_group.index',get_defined_vars());
    }

    public function userGroupEdit($id) {

        $user=auth()->user();
        $role=Role::find($id);
        $permissions=Permission::where('group_type','APP')->get()->groupBy('type');



        return view('vender::service_provider.app_setting.user_group.edit',get_defined_vars());
    }
    public function userGroupView($id) {

        $user=auth()->user();
        $role=Role::find($id);

        $permissions=collect($role['permissions'])->groupBy('type');


        return view('vender::service_provider.app_setting.user_group.view',get_defined_vars());
    }

    public function addUserGroup() {


        $permissions=Permission::where('group_type','APP')->get()->groupBy('type');



        return view('vender::service_provider.app_setting.user_group.add',get_defined_vars());
    }

    public function storeUserGroup (Request $request)  {
        $user=auth()->user();
        $vender_id=0;

        if($user['vender_id']==0){
            $vender_id=$user['id'];
        }else{
            $vender_id=$user['vender_id'];
        }
        $request['name']=$request['name']."SVP_".$vender_id;
        $request->validate([
            'name' => ['required', 'string','max:255','unique:roles'],
        ]);

      $role=Role::create([
        'name'=>$request['name']."SVP_".$vender_id,
        'group_type'=>'Custom',
        'type'=>'APP',
        'vender_id'=>$vender_id
      ]);


      $role->syncPermissions($request['permission_id']);

      return redirect()->route('vender.service.provider.user.group');




    }

    public function updateUserGroup (Request $request)  {
        $user=auth()->user();
        $vender_id=0;

        if($user['vender_id']==0){
            $vender_id=$user['id'];
        }else{
            $vender_id=$user['vender_id'];
        }
        $request['name']=$request['name']."SVP_".$vender_id;
        $request->validate([
            'name' => 'required|unique:roles,name,' . $request->id,
        ]);

      $role=Role::find($request['id'])->update([
        'name'=>$request['name']."SVP_".$vender_id,
        // 'group_type'=>'Custom',
        'type'=>'APP',
        'vender_id'=>$vender_id
      ]);

      $roles=Role::find($request['id']);

      $roles->revokePermissionTo($roles['permissions']);
      $roles->syncPermissions($request['permission_id']);

      return redirect()->route('vender.service.provider.user.group');




    }
}
