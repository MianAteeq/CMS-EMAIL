<?php

namespace Modules\Admin\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Admin\Entities\CarModel;
use Intervention\Image\ImageManagerStatic as Image;
use File;
use Modules\Admin\Entities\CarMaker;

class CarModelController extends Controller
{
    /************  Get Car Modal    *************/

    public function index()
    {
        $car_models = CarModel::orderBy('id', 'desc')->get();
        return view('admin::admin.car_model.index',get_defined_vars());
    }

    /************  Create Car Modal    *************/

    public function add(Request $request)
    {

        $parent_makers=CarMaker::all();

        return view('admin::admin.car_model.add', get_defined_vars());
    }

    /************  Create Car Modal    *************/


    public function edit($id)
    {
        $car_model = CarModel::find($id);
        $parent_makers=CarMaker::all();
        return view('admin::admin.car_model.edit', get_defined_vars());
    }

    /************  Store Car Modal    *************/

    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'unique:car_models', 'max:255'],

        ]);

        // Upload Image

        if ($request->image) {
            $filename = time() . '.' . $request->image->extension();
            $path = public_path('car/image/');
            $upload_image = $path . $filename;
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }
            $img = Image::make($request->image)->resize(200, 200);
            $img->save($upload_image);

            $image = 'car/image/' . $filename;
        } else {
            $image = "";
        }




        // Save Data to Mysql

        $data = [
            'name' => $request->name,
             'parent_id' => $request->parent_id,
            'image' => $image,
        ];
        $response = CarModel::create($data);

        if ($response) {
            return redirect()->route('admin.models')->with('success', 'Your Car Model has been Inserted.');
        } else {
            return redirect()->route('admin.models')->with('error', 'Something Went Wrong');
        }
    }

    /************  Update Car Modal    *************/

    public function update(Request $request)
    {
        $request->validate([
            // 'name' => 'required|unique:job_types|max:255' . $request['id'],
            'name' => 'required|unique:car_models,name,' . $request->id

        ]);

        // Upload Image

        if ($request->image) {
            $filename = time() . '.' . $request->image->extension();
            $path = public_path('car/image/');
            $upload_image = $path . $filename;
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }
            $img = Image::make($request->image)->resize(200, 200);
            $img->save($upload_image);

            $image = 'car/image/' . $filename;
        } else {
            $image = $request['image_model'];
        }




        // Save Data to Mysql

        $data = [
            'name' => $request->name,
             'parent_id' => $request->parent_id,
            'image' => $image,
        ];
        $response = CarModel::find($request['id'])->update($data);

        if ($response) {
            return redirect()->route('admin.models')->with('success', 'Your Car Model has been Updated.');
        } else {
            return redirect()->route('admin.models')->with('error', 'Something Went Wrong');
        }
    }

    public function destroy($id)
    {
        CarModel::find($id)->delete();


        return redirect()->route('admin.models')->with('success', 'Your Car Model has been Delete.');
    }

}
