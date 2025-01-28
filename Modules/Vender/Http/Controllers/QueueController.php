<?php

namespace Modules\Vender\Http\Controllers;

use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Vender\Entities\Booking;
use Modules\Vender\Entities\Quotation;

class QueueController extends Controller
{
    public function getQuotationDetail(Request $request)
    {

        try {


          

            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $quotations = Booking::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail', 'service', 'job_requests', 'booking_items','job_requests.job_types','job_requests.job_types.job_type',
            ])->where('vender_id', $vender_id)->whereIn('status', ['ARRIVED'])->get();
            
            return response()->json([
                'status' => true,
                'quotations' => $quotations,
                'message' => "Booking Queue Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Quotation",
            ]);
        }
    }
}
