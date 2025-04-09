<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class AppPermissionController extends Controller
{

    public function getUserPermission(Request $request) {


        $user= User::where('vender_id',$request->vender_id)->first();
        $permissions=$user['permissions'];

        $permissions = $permissions->map(function ($permission) {
            return [
                'id' => $permission->id,
                'name' => $permission->name,
                'type' => $permission->type,
                'group_type' => $permission->group_type,
                'guard_name' => $permission->guard_name,
            ];
        });
        return response()->json([
            'status' => true,
            'message' => 'Permissions fetched successfully',
            'data' => $permissions->pluck('name')->toArray(),
        ]);

    }

    public function getPermission () {

        Permission::withoutGlobalScopes()->where('type','APP')->get();
        $permissions = Permission::where('type','APP')->get();

        $permissions = $permissions->map(function ($permission) {
            return [
                'id' => $permission->id,
                'name' => $permission->name,
                'type' => $permission->type,
                'group_type' => $permission->group_type,
                'guard_name' => $permission->guard_name,
            ];
        });
        return response()->json([
            'status' => true,
            'message' => 'Permissions fetched successfully',
            'data' => $permissions,
        ]);

    }

    public function getUsers () {


        $permissions = User::orderBy('id','desc')->with('permissions')->get();


        return response()->json([
            'status' => true,
            'message' => 'Users fetched successfully',
            'data' => $permissions,
        ]);

    }
    public function saveUser(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'vender_id' => $request->vender_id,
            'password' => bcrypt($request->password),
            ]);
        $user->givePermissionTo($request->permission_id);



        return response()->json([
            'status' => true,
            'message' => 'Users Create successfully',

        ]);

    }
    public function updateUser(Request $request) {

        $user = User::find($request['id']);


        $permission_id = $user->permissions->pluck('name')->toArray();
        $user->revokePermissionTo($permission_id);
        $user->givePermissionTo($request->permission_id);



        return response()->json([
            'status' => true,
            'permission_id' => $permission_id,
            'message' => 'Users Update successfully',

        ]);

    }
}
