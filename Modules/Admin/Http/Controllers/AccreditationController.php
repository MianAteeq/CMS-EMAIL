<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\AccreditationScheme;
use File;
use Intervention\Image\ImageManagerStatic as Image;

class AccreditationController extends Controller
{
    public function index()
    {
        $warranty_jobs = AccreditationScheme::orderBy('id', 'desc')->get();
        return view('admin::admin.accreditation.index', get_defined_vars());
    }


    public function create()
    {
        return view('admin::admin.accreditation.add');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:accreditation_schemes', 'max:255'],

        ]);



        // Upload Image

        if ($request->image) {
            // return $request;
            $filename = time() . '.' . $request->image->extension();
            $path = public_path('accreditation/');
            $upload_image = $path . $filename;
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 666, true, true);
            }
            $img = Image::make($request->image)->resize(200, 200);
            $img->save($upload_image);

            $image = 'accreditation/' . $filename;
        } else {
            $image = "";
        }




        // Save Data to Mysql

        $data = [
            'name' => $request->name,
            'image' => $image,
        ];
        $response = AccreditationScheme::create($data);

        if ($response) {
            return redirect()->route('admin.accreditation')->with('success', 'Your Accreditation Scheme has been Inserted.');
        } else {
            return redirect()->route('admin.accreditation')->with('error', 'Something Went Wrong');
        }
    }


    public function edit($id)
    {
        $warranty_job = AccreditationScheme::orderBy('id', 'desc')->find($id);
        return view('admin::admin.accreditation.edit', get_defined_vars());
    }


    public function update(Request $request)
    {
        $request->validate([
            // 'name' => 'required|unique:job_types|max:255' . $request['id'],
            'name' => 'required|unique:accreditation_schemes,name,' . $request->id

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
        $response = AccreditationScheme::find($request['id'])->update($data);

        if ($response) {
            return redirect()->route('admin.accreditation')->with('success', 'Your Accreditation Scheme has been Updated.');
        } else {
            return redirect()->route('admin.accreditation')->with('error', 'Something Went Wrong');
        }
    }


    public function destroy($id)
    {
        AccreditationScheme::find($id)->delete();


        return redirect()->route('admin.accreditation')->with('success', 'Your Accreditation Scheme has been Delete.');
    }
}
