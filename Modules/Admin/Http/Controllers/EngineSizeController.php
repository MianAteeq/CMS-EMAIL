<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\EngineSize;
use Illuminate\Contracts\Support\Renderable;

class EngineSizeController extends Controller
{
     /************  Get EngineSize    *************/

     public function index()
     {

         $car_makers = EngineSize::orderBy('id', 'desc')->get();
         return view('admin::admin.engine_size.index',get_defined_vars());
     }

 /************  Create EngineSize    *************/

     public function add(Request $request)
     {


         return view('admin::admin.engine_size.add',get_defined_vars());
     }

 /************  Create EngineSize    *************/


     public function edit($id)
     {
         $car_maker = EngineSize::find($id);
         return view('admin::admin.engine_size.edit',get_defined_vars());
     }

 /************  Store EngineSize    *************/

 public function store(Request $request)
 {
    // return $request;
     $request->validate([
         'eng_size' => ['required', 'unique:engine_sizes', 'max:255'],

     ]);








     // Save Data to Mysql

     $data = [
         'eng_size' => $request->eng_size,

     ];
     $response = EngineSize::create($data);

     if ($response) {
         return redirect()->route('admin.engine.size')->with('success', 'Your EngineSize has been Inserted.');
     } else {
         return redirect()->route('admin.engine.size')->with('error', 'Something Went Wrong');
     }
 }

 /************  Update EngineSize    *************/

 public function update(Request $request)
 {
     $request->validate([
         // 'name' => 'required|unique:job_types|max:255' . $request['id'],
         'eng_size' => 'required|unique:engine_sizes,eng_size,' . $request->id

     ]);






     // Save Data to Mysql

     $data = [
         'eng_size' => $request->eng_size,

     ];
     $response = EngineSize::find($request['id'])->update($data);

     if ($response) {
         return redirect()->route('admin.engine.size')->with('success', 'Your EngineSize has been Updated.');
     } else {
         return redirect()->route('admin.engine.size')->with('error', 'Something Went Wrong');
     }
 }

 /************  Destroy EngineSize    *************/

 public function destroy($id)
 {
    EngineSize::find($id)->delete();


     return redirect()->route('admin.engine.size')->with('success', 'Your EngineSize has been Delete.');
 }

}
