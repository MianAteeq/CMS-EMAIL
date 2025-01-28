<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Admin\Entities\City;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;

class CityController extends Controller
{
      /************  Get City    *************/

      public function index()
      {

          $car_makers = City::orderBy('id', 'desc')->get();
          return view('admin::admin.city.index',get_defined_vars());
      }

  /************  Create City    *************/

      public function add(Request $request)
      {


          return view('admin::admin.city.add',get_defined_vars());
      }

  /************  Create City    *************/


      public function edit($id)
      {
          $car_maker = City::find($id);
          return view('admin::admin.city.edit',get_defined_vars());
      }

  /************  Store City    *************/

  public function store(Request $request)
  {
     // return $request;
      $request->validate([
          'name' => ['required', 'unique:cities', 'max:255'],

      ]);








      // Save Data to Mysql

      $data = [
          'name' => $request->name,

      ];
      $response = City::create($data);

      if ($response) {
          return redirect()->route('admin.city')->with('success', 'Your City has been Inserted.');
      } else {
          return redirect()->route('admin.city')->with('error', 'Something Went Wrong');
      }
  }

  /************  Update City    *************/

  public function update(Request $request)
  {
      $request->validate([
          // 'name' => 'required|unique:job_types|max:255' . $request['id'],
          'name' => 'required|unique:cities,name,' . $request->id

      ]);






      // Save Data to Mysql

      $data = [
          'name' => $request->name,

      ];
      $response = City::find($request['id'])->update($data);

      if ($response) {
          return redirect()->route('admin.city')->with('success', 'Your City has been Updated.');
      } else {
          return redirect()->route('admin.city')->with('error', 'Something Went Wrong');
      }
  }

  /************  Destroy City    *************/

  public function destroy($id)
  {
     City::find($id)->delete();


      return redirect()->route('admin.city')->with('success', 'Your City has been Delete.');
  }
}
