<?php

namespace Modules\Vender\Http\Controllers;

use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Vender\Entities\Booking;
use Modules\Vender\Entities\BookingJobItem;
use Modules\Vender\Entities\BookingJobItemJobType;
use Modules\Vender\Entities\QuotationJobItemJobType;

class BookJobItemController extends Controller
{
    /**************** save QuotationItem *********************/

    public function saveBookingItem(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'booking_id' =>  ['required'],
                'job_type_id' =>  ['required'],
                'price_type_id' =>  ['required'],
                // 'job_description' =>  ['required'],
                'product' =>  ['required'],
                'unit_price' =>  ['required'],
                'qty' =>  ['required'],
                'discount' =>  ['required'],
                'vat_rate' =>  ['required'],
                'vat_price' =>  ['required'],
                'total_price' =>  ['required'],
                'sub_total_ex_vat' =>  ['required'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }

            $booking=Booking::find($request->booking_id);

            $is_job=0;

            if($booking['job_no']!=null){
                $is_job=1;
            }

            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $latestOrder = BookingJobItem::orderBy('created_at', 'DESC')->first();

            $obj = BookingJobItem::create([
                "vender_id" => $vender_id,
                "job_item_no" => 'JIT-'."SVP".str_pad($vender_id, 5, "0", STR_PAD_LEFT)."-". str_pad($latestOrder?$latestOrder->id+1: 0 + 1, 5, "0", STR_PAD_LEFT),
                 "is_job"=>$is_job,
                ...$request->except('job_types'),

            ]);

            if(isset($request['job_types'])){
                foreach ($request['job_types'] as $key => $job_type) {

                    BookingJobItemJobType::create([
                        "job_item_id"=>$obj['id'],
                        "job_type_id"=>$job_type['id'],

                    ]);
                    # code...
                }
            }
            Booking::find($request['booking_id'])->update([
                "vender_id" => $vender_id,

                "total" => BookingJobItem::where('booking_id', $request['booking_id'])->sum('total_price'),
                "sub_total" => BookingJobItem::where('booking_id', $request['booking_id'])->sum('sub_total_ex_vat'),
                "vat" => BookingJobItem::where('booking_id', $request['booking_id'])->sum('vat_price'),

            ]);

            $quotation_item = BookingJobItem::with(['booking', 'job_type', 'price_type'])->find($obj->id);

            return response()->json([
                'status' => true,
                'quotation_item' => $quotation_item,
                'message' => "Item Added Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Add Quotation Item",
            ]);
        }
    }
    /**************** update QuotationItem *********************/

    public function updateBookingItem(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'booking_item_id' =>  ['required'],
                'booking_id' =>  ['required'],
                'job_type_id' =>  ['required'],
                'price_type_id' =>  ['required'],

                // 'job_description' =>  ['required'],
                'product' =>  ['required'],
                'unit_price' =>  ['required'],
                'qty' =>  ['required'],
                'discount' =>  ['required'],
                'vat_rate' =>  ['required'],
                'vat_price' =>  ['required'],
                'total_price' =>  ['required'],
                'sub_total_ex_vat' =>  ['required'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;



            $obj = BookingJobItem::find($request['booking_item_id'])->update([
                "vender_id" => $vender_id,
                ...$request->except('booking_item_id','job_types'),

            ]);

            BookingJobItemJobType::where('job_item_id',$request['booking_item_id'])->delete();

            if(isset($request['job_types'])){
                foreach ($request['job_types'] as $key => $job_type) {

                    BookingJobItemJobType::create([
                        "job_item_id"=>$request['booking_item_id'],
                        "job_type_id"=>$job_type['id'],

                    ]);
                    # code...
                }
            }

            Booking::find($request['booking_id'])->update([
                "vender_id" => $vender_id,

                "total" => BookingJobItem::where('booking_id', $request['booking_id'])->sum('total_price'),
                "sub_total" => BookingJobItem::where('booking_id', $request['booking_id'])->sum('sub_total_ex_vat'),
                "vat" => BookingJobItem::where('booking_id', $request['booking_id'])->sum('vat_price'),

            ]);

            $quotation_item = BookingJobItem::with(['booking', 'job_type', 'price_type'])->find($request->booking_item_id);

            return response()->json([
                'status' => true,
                'booking_item' => $quotation_item,
                'message' => "Item Update Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Update booking Item",
            ]);
        }
    }


    public function getBookingSingleJobItem(Request $request)
    {
        try {


            $quotation_item = BookingJobItem::with(['job_type', 'price_type'])->find($request->booking_item_id);

            if ($quotation_item) {
                return response()->json([
                    'status' => true,
                    '$quotation_item' => $quotation_item,
                    'message' => "Booking Item Fetch Successfully",
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'booking_item' => $quotation_item,
                    'message' => "Booking Item Not Found",
                ]);
            }
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Add Booking Item",
            ]);
        }
    }


    /***********  Delete Job Request    ***************/


    public function deleteBookingItem(Request $request)
    {

        try {


            $quotation_item = BookingJobItem::find($request->booking_item_id);

            if ($quotation_item) {
                $quotation_item->delete();
                Booking::find($quotation_item['booking_id'])->update([
                    "total" =>( BookingJobItem::where('booking_id', $quotation_item['booking_id'])->sum('total_price')),
                    "sub_total" => BookingJobItem::where('booking_id', $quotation_item['booking_id'])->sum('sub_total_ex_vat'),
                    "vat" => BookingJobItem::where('booking_id', $quotation_item['booking_id'])->sum('vat_price'),

                ]);

                return response()->json([
                    'status' => true,

                    'message' => "Booking Item Delete Successfully",
                ]);
            } else {
                return response()->json([
                    'status' => false,

                    'message' => "Booking Item Not Found",
                ]);
            }
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Add Booking Item",
            ]);
        }
    }
}
