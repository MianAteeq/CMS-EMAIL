<?php

namespace Modules\ClientHub\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Vender\Entities\Booking;
use Modules\Vender\Entities\BookingJobItem;
use Modules\Vender\Entities\BookingJobRequest;
use Modules\Vender\Entities\CustomNotification;
use Modules\Vender\Entities\Quotation;
use Kutia\Larafirebase\Facades\Larafirebase;
use Modules\Vender\Entities\ContactDetail;
use Modules\Vender\Entities\TradingUnit;

class QuotationController extends Controller
{
    public function saveQuotation(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'vehicle_id' =>  ['required'],
                'trading_id' =>  ['required'],
                'service_id' =>  ['required'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $vender_id = TradingUnit::find($request['trading_id'])->vender_id;
            $latestOrder = Quotation::orderBy('created_at', 'DESC')->first();
            $latestOrderContact = ContactDetail::orderBy('created_at', 'DESC')->first();
            $contact_detail=ContactDetail::where('hub_id',$request->user()->id)->where('vender_id',$vender_id)->first();
            if($contact_detail==null){
                $contact_detail = ContactDetail::create([
                    "vender_id" => $vender_id,
                    "contact_no"=>'CON-'."SVP".str_pad($vender_id, 5, "0", STR_PAD_LEFT)."-". str_pad($latestOrderContact?$latestOrderContact->id+1: 0 + 1, 5, "0", STR_PAD_LEFT),
                    'name'=>$request->user()->name,
                    'mobile_no'=>$request->user()->phone_no,
                    'email'=>$request->user()->email,
                    'hub_id'=>$request->user()->id

                ]);
            }



            $obj = Quotation::create([
                "vender_id" => $vender_id,
                "trading_id" => $request->trading_id,
                "contact_detail_id"=>$contact_detail->id,
                'is_hub'=>1,
                "quotation_no" =>'QTE-'."SVP".str_pad($vender_id, 5, "0", STR_PAD_LEFT)."-".str_pad($latestOrder ? $latestOrder->id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT),
                ...$request->all(),
            ]);

            $quotation = Quotation::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail', 'service', 'job_requests', 'quotation_item'
            ])->find($obj->id);

            return response()->json([
                'status' => true,
                'quotation' => $quotation,
                'message' => "Quotation Added Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "$e->getMessage(),
            ]);
        }
    }

    /***********  Get Single Quotation    ***************/

    public function getSingleQuotation(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'id' =>  ['required'],


            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $vender_id = $request->user()->id;

            $quotations = Quotation::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail', 'service', 'job_requests', 'job_requests.job_type', 'job_requests.price_type', 'quotation_item', 'vender', 'vender.profile'
            ])->find($request['id']);

            if ($quotations == null) {
                return response()->json([
                    'status' => false,
                    'quotation' => $quotations,
                    'message' => "Quotation Not Exist",
                ]);
            }

            return response()->json([
                'status' => true,
                'quotation' => $quotations,
                'message' => "Quotation Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Quotation",
            ]);
        }
    }

    public function confirmQuotation(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'quotation_id' =>  ['required'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }




            Quotation::find($request['quotation_id'])->update([
                "status" => 'REQUEST_FOR_PRICE',

            ]);



            $quotation = Quotation::with(['contact_detail', 'service', 'job_requests', 'quotation_item'])->with('vehicle.vehicle_make')->with('vehicle.vehicle_model')->find($request->quotation_id);

            $notification= new CustomNotification();
            $notification->vender_id= Quotation::find($request['quotation_id'])->vender_id;
            $notification->hub_id=$request->user()->id;
            $notification->hub_id=$request->user()->id;
            $notification->message="You Have the new Quotation Request from Customer Please View";
            $notification->save();

            // Larafirebase::fromArray(['title' => 'Quotation Request', 'body' => 'You Have the new Quotation Request from Customer Please View'])->withAdditionalData([
            //     'vender_id' => Quotation::find($request['quotation_id'])->vender_id,
            //     'user_id' =>0,
            // ])->sendNotification(User::find(Quotation::find($request['quotation_id'])->vender_id)['token']);





            return response()->json([
                'status' => true,
                'quotation' => $quotation,
                'message' => "Quotation Send Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Send Quotation ",
            ]);
        }
    }
    public function rejectQuotation(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'quotation_id' =>  ['required'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }




            Quotation::find($request['quotation_id'])->update([
                "status" => 'CANCELLED',

            ]);



            $quotation = Quotation::with(['contact_detail', 'service', 'job_requests', 'quotation_item'])->with('vehicle.vehicle_make')->with('vehicle.vehicle_model')->find($request->quotation_id);

            $notification= new CustomNotification();
            $notification->vender_id= Quotation::find($request['quotation_id'])->vender_id;
            $notification->hub_id=$request->user()->id;
            $notification->message="Customer Rejected the Quotation Please View";
            $notification->save();



            // Larafirebase::fromArray(['title' => 'Quotation Request', 'body' => 'Customer Rejected the Quotation Please View'])->withAdditionalData([
            //     'vender_id' => Quotation::find($request['quotation_id'])->vender_id,
            //     'user_id' => 0,
            // ])->sendNotification(User::find(Quotation::find($request['quotation_id'])->vender_id)['token']);





            return response()->json([
                'status' => true,
                'quotation' => $quotation,
                'message' => "Quotation REJECT Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Send Quotation ",
            ]);
        }
    }


    public function acceptQuotation(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'quotation_id' =>  ['required'],
                'booking_date' => ['required', 'date'],
                'booking_time' => ['required'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }



            Quotation::find($request['quotation_id'])->update([
                "status" => 'EXPIRED',
            ]);

            $latestOrder = Booking::orderBy('created_at', 'DESC')->first();
            $quotation = Quotation::find($request->quotation_id);

            $already_book = Booking::where('quotation_id', $request['quotation_id'])->first();

            if (isset($already_book)) {

                return response()->json([
                    'status' => false,
                    // 'booking' => $bookings,
                    'message' => "Booking already created for this Booking",
                ]);
            }


            $booking = Booking::create([
                "vender_id" => $quotation['vender_id'],
                "booking_no" => 'BK' . str_pad($latestOrder->id ?? 0 + 1, 8, "0", STR_PAD_LEFT),
                "contact_detail_id" => $quotation['contact_detail_id'],
                "vehicle_id" => $quotation['vehicle_id'],
                "service_id" => $quotation['service_id'],
                "total" => $quotation['total'],
                "sub_total" => $quotation['sub_total'],
                "vat" => $quotation['vat'],
                "status" => 'DRAFT',
                "booking_date" => $request['booking_date'],
                "booking_time" => $request['booking_time'],
                "quotation_id" => $request['quotation_id'],
            ]);

            foreach ($quotation['job_requests'] as $key => $job_request) {

                BookingJobRequest::create([
                    'booking_id' => $booking['id'],
                    ...collect($job_request)->except('quotation_id', 'created_at', 'updated_at', 'id'),

                ]);
            }
            foreach ($quotation['quotation_item'] as $key => $job_request) {

                BookingJobItem::create([
                    'booking_id' => $booking['id'],
                    ...collect($job_request)->except('quotation_id', 'created_at', 'updated_at', 'id'),

                ]);
            }

            $bookings = Booking::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail', 'service', 'job_requests', 'booking_items'
            ])->find($booking->id);


            $notification = new CustomNotification();
            $notification->vender_id = Quotation::find($request['quotation_id'])->vender_id;
            $notification->hub_id = $request->user()->id;
            $notification->message = "Customer Accept the Quotation Please View";
            $notification->save();


            // Larafirebase::fromArray(['title' => 'Quotation Request', 'body' => 'Customer Accept the Quotation Please View'])->withAdditionalData([
            //     'vender_id' => Quotation::find($request['quotation_id'])->vender_id,
            //     'user_id' => 0,
            // ])->sendNotification(User::find(Quotation::find($request['quotation_id'])->vender_id)['token']);




            return response()->json([
                'status' => true,
                'bookings' => $bookings,
                'message' => "Booking Create Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Send Booking ",
            ]);
        }
    }

    /***********  Get Quotation    ***************/

    public function getQuotationDetail(Request $request)
    {

        try {


            $vender_id = $request->user()->id;

            $quotations = Quotation::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail', 'service', 'job_requests', 'quotation_item','vender','vender.profile'
            ])->whereHas('contact_detail', function($q) use($vender_id){
                $q->where('hub_id', '>=', $vender_id);
            })->orderBy('id','desc')->limit(10)->orderBy('id','desc')->get();
            return response()->json([
                'status' => true,
                'quotations' => $quotations,
                'message' => "Quotation Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Quotation",
            ]);
        }
    }

    public function statusQuotation(Request $request)
    {
        try {
            $validator = \Validator::make($request->all(), [
                'quotation_id' =>  ['required'],
                'status' =>  ['required'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $notification = new CustomNotification();
            $notification->vender_id = Quotation::find($request['quotation_id'])->vender_id;
            $notification->hub_id = $request->user()->id;
            $notification->message = "Customer Change Status of the Quotation Please View";
            $notification->save();


            // Larafirebase::fromArray(['title' => 'Quotation Request', 'body' => 'Customer Change Status of the Quotation Please View'])->withAdditionalData([
            //     'vender_id' => Quotation::find($request['quotation_id'])->vender_id,
            //     'user_id' => 0,
            // ])->sendNotification(User::find(Quotation::find($request['quotation_id'])->vender_id)['token']);




            Quotation::find($request['quotation_id'])->update([
                "status" => $request['status'],
                "note" => $request['note'] ?? '',
            ]);





            return response()->json([
                'status' => true,
                'message' => "Quotation " . $request['status'] . " Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Status Quotation ",
            ]);
        }
    }
}
