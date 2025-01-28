<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\PaymentMethod;
use Illuminate\Contracts\Support\Renderable;

class PaymentMethodController extends Controller
{
      /************  Get PaymentMethod    *************/

      public function index()
      {

          $car_makers = PaymentMethod::orderBy('id', 'desc')->get();
          return view('admin::admin.payment_method.index',get_defined_vars());
      }

  /************  Create PaymentMethod    *************/

      public function add(Request $request)
      {


          return view('admin::admin.payment_method.add',get_defined_vars());
      }

  /************  Create PaymentMethod    *************/


      public function edit($id)
      {
          $car_maker = PaymentMethod::find($id);
          return view('admin::admin.payment_method.edit',get_defined_vars());
      }

  /************  Store PaymentMethod    *************/

  public function store(Request $request)
  {
     // return $request;
      $request->validate([
          'name' => ['required', 'unique:payment_methods', 'max:255'],

      ]);








      // Save Data to Mysql

      $data = [
          'name' => $request->name,

      ];
      $response = PaymentMethod::create($data);

      if ($response) {
          return redirect()->route('admin.payment.method')->with('success', 'Your PaymentMethod has been Inserted.');
      } else {
          return redirect()->route('admin.payment.method')->with('error', 'Something Went Wrong');
      }
  }

  /************  Update PaymentMethod    *************/

  public function update(Request $request)
  {
      $request->validate([
          // 'name' => 'required|unique:job_types|max:255' . $request['id'],
          'name' => 'required|unique:payment_methods,name,' . $request->id

      ]);






      // Save Data to Mysql

      $data = [
          'name' => $request->name,

      ];
      $response = PaymentMethod::find($request['id'])->update($data);

      if ($response) {
          return redirect()->route('admin.payment.method')->with('success', 'Your PaymentMethod has been Updated.');
      } else {
          return redirect()->route('admin.payment.method')->with('error', 'Something Went Wrong');
      }
  }

  /************  Destroy PaymentMethod    *************/

  public function destroy($id)
  {
     PaymentMethod::find($id)->delete();


      return redirect()->route('admin.payment.method')->with('success', 'Your PaymentMethod has been Delete.');
  }
}
