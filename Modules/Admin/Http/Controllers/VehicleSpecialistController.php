<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\VehicleSpecialist;
use File;
use Intervention\Image\ImageManagerStatic as Image;

class VehicleSpecialistController extends Controller
{
    public function index()
    {
        $warranty_jobs = VehicleSpecialist::orderBy('id', 'desc')->get();
        return view('admin::admin.vehicle_specialist.index', get_defined_vars());
    }


    public function create()
    {
        return view('admin::admin.vehicle_specialist.add');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:vehicle_specialists', 'max:255'],

        ]);



        // Upload Image

        if ($request->image) {
            // return $request;
            $filename = time() . '.' . $request->image->extension();
            $path = public_path('vehicle/specialist/');
            $upload_image = $path . $filename;
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 666, true, true);
            }
            $img = Image::make($request->image)->resize(200, 200);
            $img->save($upload_image);

            $image = 'vehicle/specialist/' . $filename;
        } else {
            $image = "";
        }




        // Save Data to Mysql

        $data = [
            'name' => $request->name,
            'image' => $image,
        ];
        $response = VehicleSpecialist::create($data);

        if ($response) {
            return redirect()->route('admin.vehicle.specialist')->with('success', 'Your Vehicle Specialist has been Inserted.');
        } else {
            return redirect()->route('admin.vehicle.specialist')->with('error', 'Something Went Wrong');
        }
    }


    public function edit($id)
    {
        $warranty_job = VehicleSpecialist::orderBy('id', 'desc')->find($id);
        return view('admin::admin.vehicle_specialist.edit', get_defined_vars());
    }


    public function update(Request $request)
    {
        $request->validate([
            // 'name' => 'required|unique:job_types|max:255' . $request['id'],
            'name' => 'required|unique:vehicle_specialists,name,' . $request->id

        ]);

        // Upload Image

        if ($request->image) {
            $filename = time() . '.' . $request->image->extension();
            $path = public_path('vehicle/specialist/');
            $upload_image = $path . $filename;
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 666, true, true);
            }
            $img = Image::make($request->image)->resize(200, 200);
            $img->save($upload_image);

            $image = 'vehicle/specialist/' . $filename;
        } else {
            $image = $request['old_image'];
        }




        // Save Data to Mysql

        $data = [
            'name' => $request->name,
            'image' => $image,
        ];
        $response = VehicleSpecialist::find($request['id'])->update($data);

        if ($response) {
            return redirect()->route('admin.vehicle.specialist')->with('success', 'Your Vehicle Specialist has been Updated.');
        } else {
            return redirect()->route('admin.vehicle.specialist')->with('error', 'Something Went Wrong');
        }
    }


    public function destroy($id)
    {
        VehicleSpecialist::find($id)->delete();


        return redirect()->route('admin.vehicle.specialist.job')->with('success', 'Your Vehicle Specialist has been Delete.');
    }
}
