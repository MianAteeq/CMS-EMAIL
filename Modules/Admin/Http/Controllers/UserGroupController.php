<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Contracts\Support\Renderable;

class UserGroupController extends Controller
{
    public function userGroup() {

        $user=auth()->user();
        $roles=Role::where('type','ADMIN')->get();



        return view('admin::admin.user_group.index',get_defined_vars());
    }

    public function userGroupEdit($id) {

        $user=auth()->user();
        $role=Role::find($id);
        $permissions=Permission::where('group_type','ADMIN')->get()->groupBy('type');



        return view('admin::admin.user_group.edit',get_defined_vars());
    }
    public function userGroupView($id) {

        $user=auth()->user();
        $role=Role::find($id);

        $permissions=collect($role['permissions'])->groupBy('type');


        return view('admin::admin.user_group.view',get_defined_vars());
    }

    public function addUserGroup() {


        $permissions=Permission::where('group_type','ADMIN')->get()->groupBy('type');


        return view('admin::admin.user_group.add',get_defined_vars());
    }

    public function storeUserGroup (Request $request)  {


      $role=Role::create([
        'name'=>$request['name'],
        'group_type'=>'Custom',
        'type'=>'ADMIN',
        'vender_id'=>0
      ]);


      $role->syncPermissions($request['permission_id']);

      return redirect()->route('admin.user.group');




    }

    public function updateUserGroup (Request $request)  {


      $role=Role::find($request['id'])->update([
        'name'=>$request['name'],
        'group_type'=>'Custom',
         'type'=>'ADMIN',
        'vender_id'=>0
      ]);

      $roles=Role::find($request['id']);

      $roles->revokePermissionTo($roles['permissions']);
      $roles->syncPermissions($request['permission_id']);

      return redirect()->route('admin.user.group');




    }
}
