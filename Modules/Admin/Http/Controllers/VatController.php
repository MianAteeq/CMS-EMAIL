<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\VatRate;
use Illuminate\Contracts\Support\Renderable;

class VatController extends Controller
{
    /************  Get VatRate    *************/

    public function index()
    {

        $car_makers = VatRate::orderBy('id', 'desc')->get();
        return view('admin::admin.vat_rate.index',get_defined_vars());
    }

/************  Create VatRate    *************/

    public function add(Request $request)
    {


        return view('admin::admin.vat_rate.add',get_defined_vars());
    }

/************  Create VatRate    *************/


    public function edit($id)
    {
        $car_maker = VatRate::find($id);
        return view('admin::admin.vat_rate.edit',get_defined_vars());
    }

/************  Store VatRate    *************/

public function store(Request $request)
{
   // return $request;
    $request->validate([
        'rate' => ['required', 'unique:vat_rates', 'max:255'],

    ]);








    // Save Data to Mysql

    $data = [
        'rate' => $request->rate,

    ];
    $response = VatRate::create($data);

    if ($response) {
        return redirect()->route('admin.vat.rate')->with('success', 'Your VatRate has been Inserted.');
    } else {
        return redirect()->route('admin.vat.rate')->with('error', 'Something Went Wrong');
    }
}

/************  Update VatRate    *************/

public function update(Request $request)
{
    $request->validate([
        // 'name' => 'required|unique:job_types|max:255' . $request['id'],
        'rate' => 'required|unique:vat_rates,rate,' . $request->id

    ]);






    // Save Data to Mysql

    $data = [
        'rate' => $request->rate,

    ];
    $response = VatRate::find($request['id'])->update($data);

    if ($response) {
        return redirect()->route('admin.vat.rate')->with('success', 'Your VatRate has been Updated.');
    } else {
        return redirect()->route('admin.vat.rate')->with('error', 'Something Went Wrong');
    }
}

/************  Destroy VatRate    *************/

public function destroy($id)
{
   VatRate::find($id)->delete();


    return redirect()->route('admin.vat.rate')->with('success', 'Your VatRate has been Delete.');
}
}
