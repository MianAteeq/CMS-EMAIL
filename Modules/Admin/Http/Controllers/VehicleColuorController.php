<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\VehicleColor;
use Illuminate\Contracts\Support\Renderable;

class VehicleColuorController extends Controller
{
     /************  Get VehicleColor    *************/

     public function index()
     {

         $car_makers = VehicleColor::orderBy('id', 'desc')->get();
         return view('admin::admin.vehicle_color.index',get_defined_vars());
     }

 /************  Create VehicleColor    *************/

     public function add(Request $request)
     {


         return view('admin::admin.vehicle_color.add',get_defined_vars());
     }

 /************  Create VehicleColor    *************/


     public function edit($id)
     {
         $car_maker = VehicleColor::find($id);
         return view('admin::admin.vehicle_color.edit',get_defined_vars());
     }

 /************  Store VehicleColor    *************/

 public function store(Request $request)
 {
    // return $request;
     $request->validate([
         'color' => ['required', 'unique:vehicle_colors', 'max:255'],

     ]);








     // Save Data to Mysql

     $data = [
         'color' => $request->color,
         'code' => $request->code,
     ];
     $response = VehicleColor::create($data);

     if ($response) {
         return redirect()->route('admin.color')->with('success', 'Your VehicleColor has been Inserted.');
     } else {
         return redirect()->route('admin.color')->with('error', 'Something Went Wrong');
     }
 }

 /************  Update VehicleColor    *************/

 public function update(Request $request)
 {
     $request->validate([
         // 'name' => 'required|unique:job_types|max:255' . $request['id'],
         'color' => 'required|unique:vehicle_colors,color,' . $request->id

     ]);






     // Save Data to Mysql

     $data = [
         'color' => $request->color,
         'code' => $request->code,

     ];
     $response = VehicleColor::find($request['id'])->update($data);

     if ($response) {
         return redirect()->route('admin.color')->with('success', 'Your VehicleColor has been Updated.');
     } else {
         return redirect()->route('admin.color')->with('error', 'Something Went Wrong');
     }
 }

 /************  Destroy VehicleColor    *************/

 public function destroy($id)
 {
    VehicleColor::find($id)->delete();


     return redirect()->route('admin.color')->with('success', 'Your VehicleColor has been Delete.');
 }


}
