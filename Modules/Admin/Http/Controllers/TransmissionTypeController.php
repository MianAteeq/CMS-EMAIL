<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Modules\Admin\Entities\TransmissionType;

class TransmissionTypeController extends Controller
{
    /************  Get TransmissionType    *************/

    public function index()
    {

        $car_makers = TransmissionType::orderBy('id', 'desc')->get();
        return view('admin::admin.trans_type.index',get_defined_vars());
    }

/************  Create TransmissionType    *************/

    public function add(Request $request)
    {


        return view('admin::admin.trans_type.add',get_defined_vars());
    }

/************  Create TransmissionType    *************/


    public function edit($id)
    {
        $car_maker = TransmissionType::find($id);
        return view('admin::admin.trans_type.edit',get_defined_vars());
    }

/************  Store TransmissionType    *************/

public function store(Request $request)
{
   // return $request;
    $request->validate([
        'transmission_types' => ['required', 'unique:transmission_types', 'max:255'],

    ]);








    // Save Data to Mysql

    $data = [
        'transmission_types' => $request->transmission_types,

    ];
    $response = TransmissionType::create($data);

    if ($response) {
        return redirect()->route('admin.trans.type')->with('success', 'Your TransmissionType has been Inserted.');
    } else {
        return redirect()->route('admin.trans.type')->with('error', 'Something Went Wrong');
    }
}

/************  Update TransmissionType    *************/

public function update(Request $request)
{
    $request->validate([
        // 'name' => 'required|unique:job_types|max:255' . $request['id'],
        'transmission_types' => 'required|unique:transmission_types,transmission_types,' . $request->id

    ]);






    // Save Data to Mysql

    $data = [
        'transmission_types' => $request->transmission_types,

    ];
    $response = TransmissionType::find($request['id'])->update($data);

    if ($response) {
        return redirect()->route('admin.trans.type')->with('success', 'Your TransmissionType has been Updated.');
    } else {
        return redirect()->route('admin.trans.type')->with('error', 'Something Went Wrong');
    }
}

/************  Destroy TransmissionType    *************/

public function destroy($id)
{
   TransmissionType::find($id)->delete();


    return redirect()->route('admin.trans.type')->with('success', 'Your TransmissionType has been Delete.');
}
}
