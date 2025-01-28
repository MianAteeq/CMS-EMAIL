<?php

namespace Modules\Admin\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Admin\Entities\PriceType;

class JobPriceTypeController extends Controller
{

    /************  Get Price Type    *************/


    public function index()
    {
        $price_types = PriceType::orderBy('id', 'desc')->get();
        return view('admin::admin.job_price.index', get_defined_vars());
    }

    /************  Create Price Type    *************/

    public function add()
    {
        return view('admin::admin.job_price.add');
    }

    /************  Get Price Type    *************/

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => ['required', 'unique:price_types', 'max:255'],

        ]);
      

        PriceType::create([
            "name" => $request->name,
            "description" => $request->description,
        ]);


        return redirect()->route('admin.job.price')->with('success', 'Your Job Price has been Inserted.');
    }
    /************  Edit Price Type    *************/

    public function edit($id)
    {
        $price_type = PriceType::find($id);
        return view('admin::admin.job_price.edit', get_defined_vars());
    }

    /************  Update Price Type    *************/

    public function update(Request $request)
    {
        $request->validate([
            // 'name' => 'required|unique:job_types|max:255' . $request['id'],
            'name' => 'required|unique:price_types,name,' . $request->id

        ]);

      

        PriceType::find($request['id'])->update([
            "name" => $request->name,
            "description" => $request->description,
        ]);


        return redirect()->route('admin.job.price')->with('success', 'Your Job Price has been Update.');
    }

    /************  Destroy Price Type    *************/

    public function delete($id)
    {
        PriceType::find($id)->delete();


        return redirect()->route('admin.job.price')->with('success', 'Your Job Price has been Delete.');
    }

}
