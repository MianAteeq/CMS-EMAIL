<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\FuelType;
use Illuminate\Contracts\Support\Renderable;

class FuelTypeController extends Controller
{
     /************  Get FuelType    *************/

     public function index()
     {

         $car_makers = FuelType::orderBy('id', 'desc')->get();
         return view('admin::admin.fuel_type.index',get_defined_vars());
     }

 /************  Create FuelType    *************/

     public function add(Request $request)
     {


         return view('admin::admin.fuel_type.add',get_defined_vars());
     }

 /************  Create FuelType    *************/


     public function edit($id)
     {
         $car_maker = FuelType::find($id);
         return view('admin::admin.fuel_type.edit',get_defined_vars());
     }

 /************  Store FuelType    *************/

 public function store(Request $request)
 {
    // return $request;
     $request->validate([
         'name' => ['required', 'unique:fuel_types', 'max:255'],

     ]);








     // Save Data to Mysql

     $data = [
         'name' => $request->name,

     ];
     $response = FuelType::create($data);

     if ($response) {
         return redirect()->route('admin.fuel.type')->with('success', 'Your FuelType has been Inserted.');
     } else {
         return redirect()->route('admin.fuel.type')->with('error', 'Something Went Wrong');
     }
 }

 /************  Update FuelType    *************/

 public function update(Request $request)
 {
     $request->validate([
         // 'name' => 'required|unique:job_types|max:255' . $request['id'],
         'name' => 'required|unique:fuel_types,name,' . $request->id

     ]);






     // Save Data to Mysql

     $data = [
         'name' => $request->name,

     ];
     $response = FuelType::find($request['id'])->update($data);

     if ($response) {
         return redirect()->route('admin.fuel.type')->with('success', 'Your FuelType has been Updated.');
     } else {
         return redirect()->route('admin.fuel.type')->with('error', 'Something Went Wrong');
     }
 }

 /************  Destroy FuelType    *************/

 public function destroy($id)
 {
    FuelType::find($id)->delete();


     return redirect()->route('admin.fuel.type')->with('success', 'Your FuelType has been Delete.');
 }
}
