<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\WarrantyJob;
use File;
use Intervention\Image\ImageManagerStatic as Image;


class WarrentyJobController extends Controller
{
    
    public function index()
    {
        $warranty_jobs=WarrantyJob::orderBy('id','desc')->get();
        return view('admin::admin.warranty_job.index',get_defined_vars());
    }

   
    public function create()
    {
        return view('admin::admin.warranty_job.add');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:warranty_jobs', 'max:255'],

        ]);



        // Upload Image

        if ($request->image) {
            // return $request;
            $filename = time() . '.' . $request->image->extension();
            $path = public_path('warranty/job/');
            $upload_image = $path . $filename;
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 666, true, true);
            }
            $img = Image::make($request->image)->resize(200, 200);
            $img->save($upload_image);

            $image = 'warranty/job/' . $filename;
        } else {
            $image = "";
        }




        // Save Data to Mysql

        $data = [
            'name' => $request->name,
            'image' => $image,
        ];
        $response = WarrantyJob::create($data);

        if ($response) {
            return redirect()->route('admin.warranty.job')->with('success', 'Your Warranty Job has been Inserted.');
        } else {
            return redirect()->route('admin.makers')->with('error', 'Something Went Wrong');
        }
    }

   
    public function edit($id)
    {
        $warranty_job = WarrantyJob::orderBy('id', 'desc')->find($id);
        return view('admin::admin.warranty_job.edit',get_defined_vars());
    }

   
    public function update(Request $request)
    {
        $request->validate([
            // 'name' => 'required|unique:job_types|max:255' . $request['id'],
            'name' => 'required|unique:warranty_jobs,name,' . $request->id

        ]);

        // Upload Image

        if ($request->image) {
            $filename = time() . '.' . $request->image->extension();
            $path = public_path('warranty/job/');
            $upload_image = $path . $filename;
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 666, true, true);
            }
            $img = Image::make($request->image)->resize(200, 200);
            $img->save($upload_image);

            $image = 'warranty/job/' . $filename;
        } else {
            $image = $request['old_image'];
        }




        // Save Data to Mysql

        $data = [
            'name' => $request->name,
            'image' => $image,
        ];
        $response = WarrantyJob::find($request['id'])->update($data);

        if ($response) {
            return redirect()->route('admin.warranty.job')->with('success', 'Your Warranty Job has been Updated.');
        } else {
            return redirect()->route('admin.warranty.job')->with('error', 'Something Went Wrong');
        }
    }

    
    public function destroy($id)
    {
        WarrantyJob::find($id)->delete();


        return redirect()->route('admin.warranty.job')->with('success', 'Your WarrantyJob has been Delete.');
    }
}
