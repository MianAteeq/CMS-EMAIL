<?php

namespace Modules\Vender\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Modules\Vender\Entities\VendorProfile;
use Spatie\Permission\Models\Role;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_vender');
    }
    
    public function index()
    {
        $teams=User::where('vender_id',auth()->user()->id)->get();
        $roles = Role::all();
        $total_teams=$teams->count();
        $active_teams=User::where('vender_id',auth()->user()->id)->where('status','Active')->count();
        $inactive_teams=User::where('vender_id',auth()->user()->id)->where('status','InActive')->count();
        return view('vender::team.index',get_defined_vars());
    }

   
    public function add()
    {
        $roles=Role::all();
        return view('vender::team.create',get_defined_vars());
    }

    
    public function store(Request $request)
    {
        

        $request->validate(
            ['name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'required|confirmed|min:6',

        ]);
        if ($request->image) {
            $filename = time() . '.' . $request->image->extension();
            $path = public_path('profile/image/');
            $upload_image = $path . $filename;
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }
            $img = Image::make($request->image)->resize(200, 200);
            $img->save($upload_image);

            $image_name = 'profile/image/' . $filename;
        } else {
            $image_name = "";
        }

      $user=  User::create([

            'vender_id' => auth()->user()->id,
            'name' => $request['name'],
            'status' => $request['status'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'profile_pic' => $image_name
        ]);

        $setting = $request->except('_token', 'name', 'email', 'last_name', 'image', 'status', 'password', 'password_confirmation', 'role_id','address');

        VendorProfile::create([
            "vender_id" => $user->id,
            ...$setting,
        ]);

        $user->syncRoles($request['role_id']);

        return redirect()->route('vender.team')->with('message', 'Team Has Been Create Successfully');
    }

    
   
    
    public function edit($id)
    {
        $team=User::with('profile')->find($id);
        $roles = Role::all();

       $selected_roles=$team->getRoleNames();
        return view('vender::team.edit',get_defined_vars());
    }

   
    public function update(Request $request)
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' =>'required|unique:users,email,' . $request->id,
               

            ]
        );
        if ($request->image) {
            $filename = time() . '.' . $request->image->extension();
            $path = public_path('profile/image/');
            $upload_image = $path . $filename;
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }
            $img = Image::make($request->image)->resize(200, 200);
            $img->save($upload_image);

            $image_name = 'profile/image/' . $filename;
        } else {
            $image_name = "";
        }

        $user =  User::find($request->id)->update([

            'vender_id' => auth()->user()->id,
            'name' => $request['name'],
            'status' => $request['status'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'profile_pic' => $image_name
        ]);
        $setting = $request->except('_token', 'name', 'email', 'last_name', 'image', 'status', 'password', 'password_confirmation','role_id','address');

        VendorProfile::where('vender_id',$request['id'])->update([
            "vender_id" => $request->id,
            ...$setting,
        ]);
       User::find($request->id)->syncRoles($request['role_id']);

        return redirect()->route('vender.team')->with('message', 'Team Has Been Updated Successfully');
   
    }

   
    public function search(Request $request)
    {
       
        // return $request;

        $result = User::query();


        if($request['name']!=null){
            $result->where('name', 'like', '%' . $request['name'] . '%');

        }
        if($request['status']!=null){
            $result->where('status',$request['status']);

        }
        if($request['role']!=null){
            $result->whereHas('roles',function ($query) use($request) {
                $query->where('id', $request['role']);
            });

        }

       $teams=$result->with('roles')->where('vender_id', auth()->user()->id)->get();

       
        $roles = Role::all();
        return view('vender::team.index', get_defined_vars());
    }
}
