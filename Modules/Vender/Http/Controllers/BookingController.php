<?php

namespace Modules\Vender\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Vender\Entities\Booking;

class BookingController extends Controller
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
        $bookings=Booking::where('vender_id',auth()->user()->id)->get();
        return view('vender::booking.index',get_defined_vars());
    }

    public function printInvoice($id)
    {
        $quotation = Booking::where('vender_id', auth()->user()->id)->with(['vehicle', 'contact_detail', 'booking_items'])->find($id);

        return view('vender::invoice.booking', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function add()
    {
        return view('vender::booking.add');
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
    public function edit()
    {
        return view('vender::booking.edit');
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
