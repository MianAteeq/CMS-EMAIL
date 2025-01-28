<?php

namespace Modules\Admin\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use File;
use Modules\Admin\Entities\CarMaker;

class CarMakerController extends Controller
{

   /************  Get Car Maker    *************/

        public function index()
        {
       
            $car_makers = CarMaker::orderBy('id', 'desc')->get();
            return view('admin::admin.car_maker.index',get_defined_vars());
        }

    /************  Create Car Maker    *************/  

        public function add(Request $request)
        {
           

            return view('admin::admin.car_maker.add',get_defined_vars());
        }

    /************  Create Car Maker    *************/  


        public function edit($id)
        {
            $car_maker = CarMaker::find($id);
            return view('admin::admin.car_maker.edit',get_defined_vars());
        }

    /************  Store Car Maker    *************/

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:car_makers', 'max:255'],

        ]);

        

        // Upload Image

        if ($request->image) {
            // return $request;
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
            'image' => $image,
        ];
        $response = CarMaker::create($data);

        if ($response) {
            return redirect()->route('admin.makers')->with('success', 'Your Car Maker has been Inserted.');
        } else {
            return redirect()->route('admin.makers')->with('error', 'Something Went Wrong');
        }
    }

    /************  Update Car Maker    *************/

    public function update(Request $request)
    {
        $request->validate([
            // 'name' => 'required|unique:job_types|max:255' . $request['id'],
            'name' => 'required|unique:car_makers,name,' . $request->id

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
            $image = $request['image'];
        }




        // Save Data to Mysql

        $data = [
            'name' => $request->name,
            'image' => $image,
        ];
        $response = CarMaker::find($request['id'])->update($data);

        if ($response) {
            return redirect()->route('admin.makers')->with('success', 'Your Car Maker has been Updated.');
        } else {
            return redirect()->route('admin.makers')->with('error', 'Something Went Wrong');
        }
    }

    /************  Destroy Car Maker    *************/

    public function destroy($id)
    {
        CarMaker::find($id)->delete();


        return redirect()->route('admin.makers')->with('success', 'Your Car Maker has been Delete.');
    }





}
