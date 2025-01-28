<?php

namespace Modules\Vender\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Vender\Entities\Invoice;

class EarningController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_vender');
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $invoices=Invoice::orderBy('id','desc')->get();
        $total_earning=Invoice::where('vender_id',auth()->user()->id)->sum('total');
        $monthly_earning=Invoice::where('vender_id',auth()->user()->id)->whereMonth('created_at', Carbon::now()->month)->sum('total');
        $today_earning=Invoice::where('vender_id',auth()->user()->id)->whereDate('created_at', Carbon::now())->sum('total');
        return view('vender::reports.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function search(Request $request)
    {
        
        if($request['invoice_no']==null && $request['vehicle_no']==null && $request['status']=='ALL'){
        $invoices=Invoice::orderBy('id','desc')->get();
        $total_earning=Invoice::where('vender_id',auth()->user()->id)->sum('total');
        $monthly_earning=Invoice::where('vender_id',auth()->user()->id)->whereMonth('created_at', Carbon::now()->month)->sum('total');
        $today_earning=Invoice::where('vender_id',auth()->user()->id)->whereDate('created_at', Carbon::now())->sum('total');
        return view('vender::reports.index',get_defined_vars());

    }

    $records=Invoice::query();

    if($request['invoice_no']!=null){

        // return $request;

        $records->orWhere('invoice_no', 'like', '%' . $request['invoice_no'] . '%');

    }
    if($request['vehicle_no']!=null){

        // return $request;

        $records->whereHas('booking', function ($query) use ($request){
            $query->whereHas('vehicle', function ($query) use ($request){
                $query->where('vrm', 'like', '%'.$request['vehicle_no'].'%')->orWhere('vin_number', 'like', '%'.$request['vehicle_no'].'%');
            });
            });

    }
    if($request['status']!='ALL'){

        // return $request;

        $records->orWhere('status', 'like', '%' . $request['status'] . '%');

    }


    $total_earning=Invoice::where('vender_id',auth()->user()->id)->sum('total');
    $monthly_earning=Invoice::where('vender_id',auth()->user()->id)->whereMonth('created_at', Carbon::now()->month)->sum('total');
    $today_earning=Invoice::where('vender_id',auth()->user()->id)->whereDate('created_at', Carbon::now())->sum('total');
   $invoices= $records->orderBy('id','desc')->get();

    // return get_defined_vars();


        return view('vender::reports.index',get_defined_vars());

    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('vender::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('vender::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
