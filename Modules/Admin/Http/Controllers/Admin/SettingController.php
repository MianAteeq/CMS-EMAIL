<?php

namespace Modules\Admin\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Modules\Admin\Entities\Setting;
use Intervention\Image\ImageManagerStatic as Image;
use File;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::get();
        return view('admin::admin.setting.add', get_defined_vars());
    }

   

    public function insert(Request $request)
    {
        // $setting = $request->except('_token');
        // foreach ($setting as $key => $value) {
        //     if (empty($value))
        //         continue;
        //     $set = Setting::where('key', $key)->first() ?: new Setting();
        //     $set->key = $key;
        //     $set->value = $value;
        //     $set->save();
        //     if ($request->hasFile($key)) {
        //         $existing = Setting::where('key', '=', $key)->first();
        //         if ($existing) {
        //             if ($request->$key) {
        //                 $filename = uniqid() . '.' . $request->$key->extension();
        //                 $path = public_path('images\setting/');
        //                 $upload_image = $path . $filename;
        //                 if (!File::exists($path)) {
        //                     File::makeDirectory($path, $mode = 0777, true, true);
        //                 }
        //                 if ($key == "favicon") {
        //                     $img = Image::make($request->$key)->resize(200, 200);
        //                 } else {
        //                     $img = Image::make($request->$key)->resize(859, 166);
        //                 }
        //                 $img->save($upload_image);

        //                 $image_name = 'images/setting/' . $filename;
        //             } else {
        //                 $image_name = "";
        //             }
        //             Setting::where('key', '=', $key)->update([
        //                 'value' => $image_name
        //             ]);
        //         }
        //     }
        // }

        $setting = $request->except('_token');
        foreach ($setting as $key => $value) {
            // return $key;
            if (empty($value))
            continue;
            $set = Setting::where('key', $key)->first() ?: new Setting();
            $set->key = $key;
            $set->value = $value;
            $set->save();
            if ($request->hasFile($key)) {
                $existing = Setting::where('key',$key)->first();
                if ($existing) {
                    $ex_path = 'uploads/cms/' .$existing->setting;
                    if (File::exists($ex_path)) {
                        File::delete($ex_path);
                    }
                    $image = $request->file($key);
                    $name = $image->getClientOriginalName();
                    $image->move('uploads/cms/', $name);
                    Setting::where('key', '=', $key)->update([
                        'value' => 'uploads/cms/' . $name
                    ]);
                }
            }
        }

        return redirect('/admin/setting')->with('success', 'Your Settings has been Inserted.');
    }
  

   
 

    public function admin_profile()
    {
        return view('admin::admin.auth.profile');
    }
    public function admin_profile_update(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            "password" => Hash::make($request->password)
        ];
        $response = Admin::where('id', auth()->user()->id)->update($data);
        if ($response) {
            return redirect('admin/settings/admin/profile')->with('success', 'Your Admin Profile has been Updated.');
        } else {
            return redirect('admin/settings/admin/profile')->with('error', 'Something Went Wrong');
        }
    }
}
