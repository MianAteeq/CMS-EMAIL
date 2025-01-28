<?php

namespace Modules\Vender\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Vender\Entities\Quotation;

class QuotesController extends Controller
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

       $quotations=Quotation::where('vender_id',auth()->user()->id)->with(['vehicle', 'contact_detail', 'quotation_item'])->get();

        return view('vender::quote.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function printInvoice($id)
    {
         $quotation = Quotation::where('vender_id', auth()->user()->id)->with(['vehicle', 'contact_detail', 'quotation_item'])->find($id);

        return view('vender::invoice.invoice', get_defined_vars());


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
