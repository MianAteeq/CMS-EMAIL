<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\ServiceOffering;
use Illuminate\Contracts\Support\Renderable;

class ServiceOfferingController extends Controller
{

      /************  Get ServiceOffering    *************/

      public function index()
      {

          $car_makers = ServiceOffering::orderBy('id', 'desc')->get();
          return view('admin::admin.service_offering.index',get_defined_vars());
      }

  /************  Create ServiceOffering    *************/

      public function add(Request $request)
      {


          return view('admin::admin.service_offering.add',get_defined_vars());
      }

  /************  Create ServiceOffering    *************/


      public function edit($id)
      {
          $car_maker = ServiceOffering::find($id);
          return view('admin::admin.service_offering.edit',get_defined_vars());
      }

  /************  Store ServiceOffering    *************/

  public function store(Request $request)
  {
     // return $request;
      $request->validate([
          'name' => ['required', 'unique:service_offerings', 'max:255'],

      ]);








      // Save Data to Mysql

      $data = [
          'name' => $request->name,

      ];
      $response = ServiceOffering::create($data);

      if ($response) {
          return redirect()->route('admin.service.offering')->with('success', 'Your ServiceOffering has been Inserted.');
      } else {
          return redirect()->route('admin.service.offering')->with('error', 'Something Went Wrong');
      }
  }

  /************  Update ServiceOffering    *************/

  public function update(Request $request)
  {
      $request->validate([
          // 'name' => 'required|unique:job_types|max:255' . $request['id'],
          'name' => 'required|unique:service_offerings,name,' . $request->id

      ]);






      // Save Data to Mysql

      $data = [
          'name' => $request->name,

      ];
      $response = ServiceOffering::find($request['id'])->update($data);

      if ($response) {
          return redirect()->route('admin.service.offering')->with('success', 'Your ServiceOffering has been Updated.');
      } else {
          return redirect()->route('admin.service.offering')->with('error', 'Something Went Wrong');
      }
  }

  /************  Destroy ServiceOffering    *************/

  public function destroy($id)
  {
     ServiceOffering::find($id)->delete();


      return redirect()->route('admin.service.offering')->with('success', 'Your ServiceOffering has been Delete.');
  }
}
