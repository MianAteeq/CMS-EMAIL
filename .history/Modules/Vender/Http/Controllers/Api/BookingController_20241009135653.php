<?php

namespace Modules\Vender\Http\Controllers\Api;

use App\Models\Log;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Kutia\Larafirebase\Facades\Larafirebase;
use Modules\ClientHub\Entities\Client;
use Modules\Vender\Entities\Booking;
use Modules\Vender\Entities\BookingJobItem;
use Modules\Vender\Entities\BookingJobItemJobType;
use Modules\Vender\Entities\BookingJobRequest;
use Modules\Vender\Entities\BookingJobRequestJobType;
use Modules\Vender\Entities\CustomNotification;
use Modules\Vender\Entities\Invoice;
use Modules\Vender\Entities\Quotation;
use stdClass;

class BookingController extends Controller
{



    // Save Booking to Draft


    public function saveBooking(Request $request)
    {
        try {
            $validator = \Validator::make($request->all(), [
                'quotation_id' =>  ['required'],
                'booking_date' =>  ['required', 'date'],
                'booking_time' =>  ['required'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;
            $trading_id = User::find($request->user()->id)['default_trading_unit'];
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
            //     'BKG-SVP' . str_pad($latestOrder->id ?? 0 + 1, 8, "0", STR_PAD_LEFT)

            $booking = Booking::create([
                "vender_id" => $vender_id,
                "trading_id" => $trading_id,
                "booking_no" => 'BKG-' . "SVP" . str_pad($vender_id, 5, "0", STR_PAD_LEFT) . "-" . str_pad($latestOrder ? $latestOrder->id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT),
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


            $quotation->status = "APPROVED";
            $quotation->update();

            $latestOrder = Log::orderBy('created_at', 'DESC')->first();
            $data = new stdClass();
            $data->user_id = $vender_id;
            $data->log_no = 'lOG-' . "SVP" . str_pad($vender_id, 5, "0", STR_PAD_LEFT) . "-" . str_pad($latestOrder ? $latestOrder->id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT);
            $data->type = "Book";
            $data->event = "Booking Create";
            $data->event_detail = "Booking Creating ";
            $data->type_id = $booking['id'];

            Log::saveLog($data);




            $bookings = Booking::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail', 'contact_detail.hub', 'service', 'job_requests', 'booking_items'
            ])->find($booking->id);

            return response()->json([
                'status' => true,
                'booking' => $bookings,
                'message' => "Booking Added Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Add Booking",
            ]);
        }
    }

    // Save Booking to Pending


    public function saveBookingPending(Request $request)
    {
        try {
            $validator = \Validator::make($request->all(), [
                'quotation_id' =>  ['required'],
                'booking_date' =>  ['required', 'date'],
                'booking_time' =>  ['required'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;
            $trading_id = User::find($request->user()->id)['default_trading_unit'];
            $latestOrder = Booking::orderBy('created_at', 'DESC')->first();


            $quotation = Quotation::find($request->quotation_id);


            $already_book = Booking::where('quotation_id', $request['quotation_id'])->orderBy('id', 'desc')->first();

            if (isset($already_book)) {

                if (isset($request['booking_id'])) {

                    $booking = Booking::find($request['booking_id'])->update([
                        "vender_id" => $vender_id,
                        "booking_no" => 'BKG-' . "SVP" . str_pad($vender_id, 5, "0", STR_PAD_LEFT) . "-" . str_pad($latestOrder ? $latestOrder->id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT),
                        "contact_detail_id" => $request['contact_detail_id'],
                        "vehicle_id" => $request['vehicle_id'],
                        "service_id" => $quotation['service_id'],
                        "total" => $quotation['total'],
                        "sub_total" => $quotation['sub_total'],
                        "vat" => $quotation['vat'],
                        "status" => 'BOOKED',
                        "booking_date" => $request['booking_date'],
                        "post_code" => $request['post_code'],
                        "address_line_1" => $request['address_line_1'],
                        "address_line_2" => $request['address_line_2'],
                        "address_line_3" => $request['address_line_3'],
                        "address_line_4" => $request['address_line_4'],
                        "service_type" => $quotation['service_type'],
                        "city" => $request['city'],
                        "quotation_id" => $request['quotation_id'],
                    ]);

                    $quotation->status = "APPROVED";
                    $quotation->update();
                } else {

                    return response()->json([
                        'status' => false,
                        // 'booking' => $bookings,
                        'message' => "Booking already created for this Booking",
                    ]);
                }
            } else {

                $booking = Booking::create([
                    "vender_id" => $vender_id,
                    "trading_id" => $trading_id,
                    "booking_no" => 'BKG-' . "SVP" . str_pad($vender_id, 5, "0", STR_PAD_LEFT) . "-" . str_pad($latestOrder ? $latestOrder->id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT),
                    "contact_detail_id" => $quotation['contact_detail_id'],
                    "vehicle_id" => $quotation['vehicle_id'],
                    "service_id" => $quotation['service_id'],
                    "total" => $quotation['total'],
                    "sub_total" => $quotation['sub_total'],
                    "vat" => $quotation['vat'],
                    "status" => 'BOOKED',
                    "booking_date" => $request['booking_date'],
                    "booking_time" => $request['booking_time'],
                    "quotation_id" => $request['quotation_id'],
                    "post_code" => $request['postCode'],
                    "address_line_1" => $request['address_line_1'],
                    "address_line_2" => $request['address_line_2'],
                    "address_line_3" => $request['address_line_3'],
                    "address_line_4" => $request['address_line_4'],
                    "service_type" => $quotation['service_type'],
                    "city" => $request['city'],
                ]);

                foreach ($quotation['job_requests'] as $key => $job_request) {

                    $object = BookingJobRequest::create([
                        'booking_id' => $booking['id'],
                        'quote_id' => $job_request['quotation_id'],

                        ...collect($job_request)->except('quotation_id', 'created_at', 'updated_at', 'id'),

                    ]);

                    foreach ($job_request['job_types'] as $key => $job_type) {

                        BookingJobRequestJobType::create([
                            "job_request_id" => $object['id'],
                            "job_type_id" => $job_type['job_type_id'],

                        ]);
                        # code...
                    }
                }
                foreach ($quotation['quotation_item'] as $key => $job_request) {

                    $obj = BookingJobItem::create([
                        'booking_id' => $booking['id'],
                        'quote_id' => $job_request['quotation_id'],
                        ...collect($job_request)->except('quotation_id', 'created_at', 'updated_at', 'id'),

                    ]);
                    foreach ($job_request['job_types'] as $key => $job_type) {

                        BookingJobItemJobType::create([
                            "job_item_id" => $obj['id'],
                            "job_type_id" => $job_type['job_type_id'],

                        ]);
                    }
                }


                $quotation->status = "APPROVED";
                $quotation->update();
            }


            $latestOrder = Log::orderBy('created_at', 'DESC')->first();
            $data = new stdClass();
            $data->user_id = $vender_id;
            $data->log_no = 'lOG-' . "SVP" . str_pad($vender_id, 5, "0", STR_PAD_LEFT) . "-" . str_pad($latestOrder ? $latestOrder->id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT);
            $data->type = "Book";
            $data->event = "Booking Create";
            $data->event_detail = "Booking Creating ";
            $data->type_id = $booking['id'];

            Log::saveLog($data);








            $bookings = Booking::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail', 'contact_detail.hub', 'service', 'job_requests', 'booking_items'
            ])->find($booking->id ?? $already_book->id);

            return response()->json([
                'status' => true,
                'booking' => $bookings,
                'message' => "Booking Confirm Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Add Booking",
            ]);
        }
    }




    /***********  Get Booking    ***************/

    public function getBookingDetail(Request $request)
    {

        try {


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;
            $trading_id = User::find($request->user()->id)['default_trading_unit'];

            $quotations = Booking::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail', 'contact_detail.hub', 'service', 'job_requests', 'job_requests.product', 'job_requests.price_type', 'booking_items', 'booking_items.price_type', 'job_requests.job_types', 'job_requests.job_types.job_type', 'booking_items.job_types', 'booking_items.job_types.job_type'
            ])->where('vender_id', $vender_id)->where('trading_id', $trading_id)->whereIn('status', ['DRAFT', 'BOOKING_REQUEST', 'CUSTOMER_PENDING', 'BOOKED', 'RE_SCHEDULE', 'MISSED', 'DECLINE'])->orderBy('id', 'desc')->get();
            $bookings = Booking::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail', 'service', 'job_requests', 'job_requests.product', 'job_requests.price_type', 'booking_items', 'booking_items.price_type', 'job_requests.job_types', 'job_requests.job_types.job_type', 'booking_items.job_types', 'booking_items.job_types.job_type'
            ])->where('vender_id', $vender_id)->where('trading_id', $trading_id)->whereIn('status', ['ARRIVED', 'INPROGRESS', 'FINAL_CHECKS', 'DUE', 'COMPLETED', 'READ_FOR_COLLECTION', 'READ_FOR_DELIVERY', 'COLLECTED', 'DELIVERED', 'VOID'])->orderBy('id', 'desc')->get();
            $booking_array = [];
            foreach ($bookings as $key => $value) {
                $data = new stdClass();
                $data = $value;
                $data['status'] = "BOOKED";
                $data['is_booked'] = 1;

                array_push($booking_array, $data);
            }
            $cancelled_jobs = Booking::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail', 'contact_detail.hub', 'service', 'job_requests', 'job_requests.product', 'job_requests.price_type', 'booking_items', 'booking_items.price_type', 'job_requests.job_types', 'job_requests.job_types.job_type', 'booking_items.job_types', 'booking_items.job_types.job_type'
            ])->where('vender_id', $vender_id)->where('trading_id', $trading_id)->whereIn('status', ['CANCELLED'])->where('job_id', 0)->orderBy('id', 'desc')->get();
            foreach ($cancelled_jobs as $key => $value) {
                $data = new stdClass();
                $data = $value;


                array_push($booking_array, $data);
            }
            $custom_array = array_merge($quotations->toArray(), $booking_array);
            return response()->json([
                'status' => true,
                'bookings' => $custom_array,
                'booking_s' => $bookings,

                'message' => "Booking Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Booking",
            ]);
        }
    }


    public function getBookingDetailTest(Request $request)
    {

        try {


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;
            $trading_id = User::find($request->user()->id)['default_trading_unit'];

            $quotations = Booking::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail', 'contact_detail.hub', 'service', 'job_requests', 'job_requests.product', 'job_requests.price_type', 'booking_items', 'booking_items.price_type', 'job_requests.job_types', 'job_requests.job_types.job_type', 'booking_items.job_types', 'booking_items.job_types.job_type'
            ])->where('vender_id', $vender_id)->where('trading_id', $trading_id)->whereIn('status', ['DRAFT', 'BOOKING_REQUEST', 'CUSTOMER_PENDING', 'BOOKED', 'RE_SCHEDULE', 'MISSED', 'DECLINE'])->orderBy('id', 'desc')->get();
            $bookings = Booking::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail', 'service', 'job_requests', 'job_requests.product', 'job_requests.price_type', 'booking_items', 'booking_items.price_type', 'job_requests.job_types', 'job_requests.job_types.job_type', 'booking_items.job_types', 'booking_items.job_types.job_type'
            ])->where('vender_id', $vender_id)->where('trading_id', $trading_id)->whereIn('status', ['ARRIVED', 'INPROGRESS', 'FINAL_CHECKS', 'DUE', 'COMPLETED', 'READ_FOR_COLLECTION', 'READ_FOR_DELIVERY', 'COLLECTED', 'DELIVERED', 'VOID'])->orderBy('id', 'desc')->get();
            $booking_array = [];
            foreach ($bookings as $key => $value) {
                $data = new stdClass();
                $data = $value;
                $data['status'] = "BOOKED";
                $data['is_booked'] = 1;

                array_push($booking_array, $data);
            }
            $cancelled_jobs = Booking::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail', 'contact_detail.hub', 'service', 'job_requests', 'job_requests.product', 'job_requests.price_type', 'booking_items', 'booking_items.price_type', 'job_requests.job_types', 'job_requests.job_types.job_type', 'booking_items.job_types', 'booking_items.job_types.job_type'
            ])->where('vender_id', $vender_id)->where('trading_id', $trading_id)->whereIn('status', ['CANCELLED'])->where('job_id', 0)->orderBy('id', 'desc')->get();
            foreach ($cancelled_jobs as $key => $value) {
                $data = new stdClass();
                $data = $value;


                array_push($booking_array, $data);
            }
            $custom_array = array_merge($quotations->toArray(), $booking_array);
            return response()->json([
                'status' => true,
                'bookings' => $custom_array,
                'booking_s' => $bookings,

                'message' => "Booking Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Booking",
            ]);
        }
    }

    /***********  Get Single Booking    ***************/

    public function getSingleBooking(Request $request)
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


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $booking = Booking::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'job_logs','job_logs.user', 'invoices', 'invoices.payments', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail', 'contact_detail.hub', 'invoice', 'service', 'job_invoices', 'job_requests', 'job_requests.product', 'job_requests.price_type', 'booking_items', 'booking_items.price_type', 'job_requests.job_types', 'job_requests.job_types.job_type', 'booking_items.job_types', 'booking_items.job_types.job_type'
            ])->where('vender_id', $vender_id)->find($request['id']);

            if ($booking == null) {
                return response()->json([
                    'status' => false,
                    'booking' => $booking,
                    'message' => "Booking Not Exist",
                ]);
            }

            return response()->json([
                'status' => true,
                'booking' => $booking,
                'message' => "Booking Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Booking",
            ]);
        }
    }
    /***********  Get InProgress Booking    ***************/

    public function startBooking(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'booking_id' =>  ['required'],


            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $booking = Booking::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail', 'contact_detail.hub', 'service', 'job_requests', 'booking_items', 'job_requests.job_types', 'job_requests.job_types.job_type',
            ])->where('vender_id', $vender_id)->find($request['booking_id']);

            $booking->status = "INPROGRESS";
            $booking->update();

            if ($booking == null) {
                return response()->json([
                    'status' => false,
                    'booking' => $booking,
                    'message' => "Booking Not Exist",
                ]);
            }


            $latestOrder = Log::orderBy('created_at', 'DESC')->first();
            $data = new stdClass();
            $data->log_no = 'lOG-' . "SVP" . str_pad($request->user()->id, 5, "0", STR_PAD_LEFT) . "-" . str_pad($latestOrder ? $latestOrder->id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT);
            $data->user_id = $request->user()->id;
            $data->type = "booking";
            $data->event = "booking Move to InPROGRESS ";
            if($request['note']!==null){

                $data->event_detail="Booking Status Change from ".str_replace('_', ' ', strtoupper($quote['status'])). " to ".str_replace('_', ' ', strtoupper($request['status'])) ." With Message ".$request['note'];
            }else{
                $data->event_detail="Booking Status Change from ".str_replace('_', ' ', strtoupper($quote['status'])). " to ".str_replace('_', ' ', strtoupper($request['status'])) ;

            }
            // $data->event_detail = "booking Status Change " . str_replace('_', ' ', strtoupper($booking['status'])) . " to  INPROGRESS";
            $data->type_id = $request['booking_id'];

            Log::saveLog($data);

            return response()->json([
                'status' => true,
                'booking' => $booking,
                'message' => "Booking Start Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Quotation",
            ]);
        }
    }
    /***********  Get cancel Booking    ***************/

    public function cancelBooking(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'booking_id' =>  ['required'],


            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $booking = Booking::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail', 'contact_detail.hub', 'service', 'job_requests', 'booking_items'
            ])->where('vender_id', $vender_id)->find($request['booking_id']);

            $latestOrder = Log::orderBy('created_at', 'DESC')->first();
            $data = new stdClass();
            $data->log_no = 'lOG-' . "SVP" . str_pad($request->user()->id, 5, "0", STR_PAD_LEFT) . "-" . str_pad($latestOrder ? $latestOrder->id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT);
            $data->user_id = $request->user()->id;
            $data->type = "Book";
            $data->event = "Booking Status Change ";
            $data->event_detail = "Status Change to " . str_replace('_', ' ', strtoupper($booking['status'])) . " to  Cancelled";
            $data->type_id = $request['booking_id'];

            Log::saveLog($data);

            $booking->status = "REJECTED";
            $booking->update();

            if ($booking == null) {
                return response()->json([
                    'status' => false,
                    'booking' => $booking,
                    'message' => "Booking Not Exist",
                ]);
            }

            $notification = new CustomNotification();
            $notification->vender_id = Booking::find($request['booking_id'])->vender_id;
            $notification->hub_id = Booking::find($request['booking_id'])->contact_detail_id;
            $notification->message = "Service Provider Cancel the Booking  Please View";
            $notification->save();

            $client = Client::find(Booking::find($request['booking_id'])->contact_detail_id);
            if (isset($client)) {
                Larafirebase::fromArray(['title' => 'Booking Request', 'body' => 'Service Provider Cancel the Booking  Please View'])->withAdditionalData([
                    'vender_id' => Booking::find($request['booking_id'])->vender_id,
                    'user_id' => $client['id'],
                ])->sendNotification($client['token']);
            }



            return response()->json([
                'status' => true,
                'booking' => $booking,
                'message' => "Booking Cancel Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Quotation",
            ]);
        }
    }
    /***********  Get Complete Booking    ***************/

    public function completeBooking(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'booking_id' =>  ['required'],


            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $booking = Booking::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail', 'service', 'job_requests', 'booking_items'
            ])->where('vender_id', $vender_id)->find($request['booking_id']);

            $latestOrder = Log::orderBy('created_at', 'DESC')->first();
            $data = new stdClass();
            $data->log_no = 'lOG-' . "SVP" . str_pad($request->user()->id, 5, "0", STR_PAD_LEFT) . "-" . str_pad($latestOrder ? $latestOrder->id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT);
            $data->user_id = $request->user()->id;
            $data->type = "Job";
            $data->event = "Job Status Change ";
            $data->event_detail = "Job Status Change " . str_replace('_', ' ', strtoupper($booking['status'])) . " to  READY FOR COLLECTION";
            $data->type_id = $request['booking_id'];

            Log::saveLog($data);



            $booking->status = "READY_FOR_COLLECTION";
            $booking->booking_date = $request['booking_date'] ?? null;
            $booking->booking_time = $request['booking_time'] ?? null;
            $booking->update();

            $single_booking = Booking::find($request['booking_id']);

            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;
            //     $latestOrder = Invoice::orderBy('created_at', 'DESC')->first();

            //  $invoice=Invoice::create([
            //         "vender_id" => $vender_id,
            //         "invoice_no" => 'INV-SVP' . str_pad($latestOrder->id ?? 0 + 1, 8, "0", STR_PAD_LEFT),
            //         "status" => 'DUE',
            //         "booking_id" => $request['booking_id'],
            //         "contact_id" => $single_booking['contact_detail_id'],
            //         "total" => $single_booking['total'],
            //         "sub_total" => $single_booking['sub_total'],
            //         "vat" => $single_booking['vat'],
            //     ]);

            if ($booking == null) {
                return response()->json([
                    'status' => false,
                    'booking' => $booking,
                    'invoice' => null,
                    'message' => "Booking Not Exist",
                ]);
            }
            $notification = new CustomNotification();
            $notification->vender_id = Booking::find($request['booking_id'])->vender_id;
            $notification->hub_id = Booking::find($request['booking_id'])->contact_detail_id;
            $notification->message = "Service Provider Complete the Booking  Please View";
            $notification->save();

            $client = Client::find(Booking::find($request['booking_id'])->contact_detail_id);
            // if (isset($client)) {
            //     Larafirebase::fromArray(['title' => 'Booking Request', 'body' => 'Service Provider Complete the Booking  Please View'])->withAdditionalData([
            //         'vender_id' => Booking::find($request['booking_id'])->vender_id,
            //         'user_id' => $client['id'],
            //     ])->sendNotification($client['token']);
            // }

            return response()->json([
                'status' => true,
                'booking' => $booking,
                'invoice' => null,
                'message' => "Booking Complete Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Booking",
            ]);
        }
    }
    public function rescheduleBooking(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'booking_id' =>  ['required'],


            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $booking = Booking::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail', 'contact_detail.hub', 'service', 'job_requests', 'booking_items'
            ])->where('vender_id', $vender_id)->find($request['booking_id']);

            $latestOrder = Log::orderBy('created_at', 'DESC')->first();
            $data = new stdClass();
            $data->log_no = 'lOG-' . "SVP" . str_pad($request->user()->id, 5, "0", STR_PAD_LEFT) . "-" . str_pad($latestOrder ? $latestOrder->id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT);
            $data->user_id = $request->user()->id;
            $data->type = "Book";
            $data->event = "Booking Status Change ";
            $data->event_detail = "Booking Status Change " . str_replace('_', ' ', strtoupper($booking['status'])) . " to  Re Schedule";
            $data->type_id = $request['booking_id'];

            Log::saveLog($data);

            $booking->status = "CUSTOMER_PENDING";
            $booking->booking_date = $request['booking_date'] ?? null;
            $booking->booking_time = $request['booking_time'] ?? null;
            $booking->update();

            $single_booking = Booking::find($request['booking_id']);

            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;
            $latestOrder = Invoice::orderBy('created_at', 'DESC')->first();



            if ($booking == null) {
                return response()->json([
                    'status' => false,
                    'booking' => $booking,

                    'message' => "Booking Not Exist",
                ]);
            }
            $notification = new CustomNotification();
            $notification->vender_id = Booking::find($request['booking_id'])->vender_id;
            $notification->hub_id = Booking::find($request['booking_id'])->contact_detail_id;
            $notification->message = "Service Provider Reschedule the Booking  Please View";
            $notification->save();

            $client = Client::find(Booking::find($request['booking_id'])->contact_detail_id);
            if (isset($client)) {
                Larafirebase::fromArray(['title' => 'Booking Request', 'body' => 'Service Provider Reschedule the Booking  Please View'])->withAdditionalData([
                    'vender_id' => Booking::find($request['booking_id'])->vender_id,
                    'user_id' => $client['id'],
                ])->sendNotification($client['token']);
            }

            return response()->json([
                'status' => true,
                'booking' => $booking,

                'message' => "Booking Reschedule Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Booking",
            ]);
        }
    }


    /***********  Get InProgress Booking    ***************/

    public function getInProgress(Request $request)
    {



        try {





            $vender_id = $request->user()['vender_id'] == 0 ? $request->user()->id : $request->user()['vender_id'];
            $trading_id = User::find($request->user()->id)['default_trading_unit'];

            $quotations = Booking::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail', 'contact_detail.hub', 'service', 'job_requests', 'booking_items', 'job_requests.job_types', 'job_requests.job_types.job_type'
            ])->where('vender_id', $vender_id)->where('trading_id',$trading_id)->limit(20)->whereIn('status', ['INPROGRESS'])->get();

            /*$notification = new CustomNotification();
            $notification->vender_id = Booking::find($request['booking_id'])->vender_id;
            $notification->hub_id = Booking::find($request['booking_id'])->contact_detail_id;
            $notification->message = "Service Provider InProgress the Booking  Please View";
            $notification->save();
*/

            return response()->json([
                'status' => true,
                'bookings' => $quotations,
                'message' => "Booking Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Booking",
            ]);
        }
    }
    /***********  Get CompleteBooking Booking    ***************/

    public function getCompleteBooking(Request $request)
    {

        try {


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;
            $trading_id = User::find($request->user()->id)['default_trading_unit'];

            $quotations = Booking::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail', 'contact_detail.hub', 'service', 'job_requests', 'booking_items', 'job_requests.job_types', 'job_requests.job_types.job_type'
            ])->where('vender_id', $vender_id)->where('trading_id',$trading_id)->whereIn('status', ['FINAL_CHECKS', 'READ_FOR_COLLECTION', 'READ_FOR_DELIVERY'])->get();

            $record_array = [];


            return response()->json([
                'status' => true,
                'bookings' => $quotations,
                'message' => "Booking Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Booking",
            ]);
        }
    }

    /***********  Get Past Booking    ***************/

    public function getPastBooking(Request $request)
    {

        try {


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;
            $trading_id = User::find($request->user()->id)['default_trading_unit'];

            $quotations = Booking::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail', 'contact_detail.hub', 'service', 'job_requests', 'booking_items', 'job_requests.job_types', 'job_requests.job_types.job_type'
            ])->whereIn('status', ['COLLECTED', 'DELIVERED', 'VOID', 'DUE'])->where('job_delete', 0)->where('trading_id',$trading_id)->get();
            // $quotations = Booking::with([
            //     'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
            //     'contact_detail','contact_detail.hub', 'service', 'job_requests', 'booking_items','job_requests.job_types','job_requests.job_types.job_type'
            // ])->where('vender_id', $vender_id)->whereHas('invoice' ,function ($query) {
            //     $query->where('status', 'PAID');
            // })->get();
            foreach ($quotations as $key => $quotation) {

                $quotation['status'] = $quotation['status'];
            }
            $booking_array = [];

            $cancelled_jobs = Booking::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail', 'contact_detail.hub', 'service', 'job_requests', 'job_requests.product', 'job_requests.price_type', 'booking_items', 'booking_items.price_type', 'job_requests.job_types', 'job_requests.job_types.job_type', 'booking_items.job_types', 'booking_items.job_types.job_type'
            ])->where('vender_id', $vender_id)->where('trading_id',$trading_id)->whereIn('status', ['CANCELLED'])->where('job_id', "!=", 0)->orderBy('id', 'desc')->get();
            foreach ($cancelled_jobs as $key => $value) {
                $data = new stdClass();
                $data = $value;


                array_push($booking_array, $data);
            }
            $custom_array = array_merge($quotations->toArray(), $booking_array);


            return response()->json([
                'status' => true,
                'bookings' => $custom_array,
                'message' => "Booking Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Booking",
            ]);
        }
    }

    public function statusBooking(Request $request)
    {
        try {
            $validator = \Validator::make($request->all(), [
                'booking_id' =>  ['required'],
                'status' =>  ['required'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }
            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;
            $quote = Booking::find($request['booking_id']);
            if ($request['status'] == "ARRIVED") {
              $already_jobs=Booking::find($request['booking_id']);

              if($already_jobs['job_no']==null){
                $latestOrder = Booking::orderBy('job_id', 'DESC')->first();
                Booking::find($request['booking_id'])->update([
                    "status" => $request['status'],
                    'job_id' => $latestOrder->job_id + 1,
                    "job_no" => 'JOB-' . "SVP" . str_pad($vender_id, 5, "0", STR_PAD_LEFT) . "-" . str_pad($latestOrder ? $latestOrder->job_id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT),
                ]);
                $latestOrder = Log::orderBy('created_at', 'DESC')->first();
                $data = new stdClass();
                $data->log_no = 'lOG-' . "SVP" . str_pad($request->user()->id, 5, "0", STR_PAD_LEFT) . "-" . str_pad($latestOrder ? $latestOrder->id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT);
                $data->user_id = $request->user()->id;
                $data->type = "Book";
                $data->event = "Booking Status Change ";
                if($request['note']!==null){

                    $data->event_detail="Booking Status Change from ".str_replace('_', ' ', strtoupper($quote['status'])). " to ".str_replace('_', ' ', strtoupper($request['status'])) ." With Message ".$request['note'];
                }else{
                    $data->event_detail="Booking Status Change from ".str_replace('_', ' ', strtoupper($quote['status'])). " to ".str_replace('_', ' ', strtoupper($request['status'])) ;

                }
                $data->type_id = $request['booking_id'];

                Log::saveLog($data);

              }else{
                // $latestOrder = Booking::orderBy('job_id', 'DESC')->first();
                Booking::find($request['booking_id'])->update([
                    "status" => $request['status'],

                ]);
                $latestOrder = Log::orderBy('created_at', 'DESC')->first();
                $data = new stdClass();
                $data->log_no = 'lOG-' . "SVP" . str_pad($request->user()->id, 5, "0", STR_PAD_LEFT) . "-" . str_pad($latestOrder ? $latestOrder->id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT);
                $data->user_id = $request->user()->id;
                $data->type = "Book";
                $data->event = "Booking Status Change ";
                if($quote['status']=="ARRIVED"){
                    $q_status="In Queue";
                }else {

                    $q_status=$quote['status'];
                }
                if($request['note']!==null){

                    $data->event_detail="Booking Status Change from ".str_replace('_', ' ', strtoupper($q_status)). " to ".str_replace('_', ' ', strtoupper($request['status'])) ." With Message ".$request['note'];
                }else{
                    $data->event_detail="Booking Status Change from ".str_replace('_', ' ', strtoupper($q_status)). " to ".str_replace('_', ' ', strtoupper($request['status'])) ;

                }
                $data->type_id = $request['booking_id'];

                Log::saveLog($data);
              }


            } else {
                if($request['status']=='READY_FOR_COLLECTION'){
                    Booking::find($request['booking_id'])->update([
                        "status" => 'READ_FOR_COLLECTION',

                    ]);
                }else{
                    Booking::find($request['booking_id'])->update([
                        "status" => $request['status'],

                    ]);
                }

            }







            $notification = new CustomNotification();
            $notification->vender_id = Booking::find($request['booking_id'])->vender_id;
            $notification->hub_id = Booking::find($request['booking_id'])->contact_detail_id;
            $notification->message = "Service Provider Change the status of the Booking  Please View";
            $notification->save();

            $client = Client::find(Booking::find($request['booking_id'])->contact_detail_id);
            // if (isset($client)) {
            //     if(isset($client['token'])){
            //         Larafirebase::fromArray(['title' => 'Booking Request', 'body' => 'Service Provider Change the status of the Booking  Please View'])->withAdditionalData([
            //             'vender_id' => Booking::find($request['booking_id'])->vender_id,
            //             'user_id' => $client['id'],
            //         ])->sendNotification($client['token']);
            //     }

            // }

            $job = "Book";

            if (
                $request['status'] == "ARRIVED" || $request['status'] == "DIAGNOSING" || $request['status'] == "DIAGNOSING_COMPLETE" || $request['status'] == "PROGRESS" || $request['status'] == "READY_FOR_COLLECTION"
                || $request['status'] == "DUE" || $request['status'] == "INPROGRESS" || $request['status'] == "READY_FOR_FINAL_CHECK" || $request['status'] == "COMPLETED"
            ) {

                $job = "Job";
            }

            if ($request['status'] === "ARRIVED") {
                $latestOrder = Log::orderBy('created_at', 'DESC')->first();
                $data = new stdClass();
                $data->log_no = 'lOG-' . "SVP" . str_pad($request->user()->id, 5, "0", STR_PAD_LEFT) . "-" . str_pad($latestOrder ? $latestOrder->id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT);
                $data->user_id = $request->user()->id;
                $data->type = $job;
                $data->event = $job . " Creating ";
                $data->event_detail = $job . " Creating ";
                $data->type_id = $request['booking_id'];

                Log::saveLog($data);
            } else {
                $latestOrder = Log::orderBy('created_at', 'DESC')->first();
                $data = new stdClass();
                $data->log_no = 'lOG-' . "SVP" . str_pad($request->user()->id, 5, "0", STR_PAD_LEFT) . "-" . str_pad($latestOrder ? $latestOrder->id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT);
                $data->user_id = $request->user()->id;
                $data->type = $job;
                $data->event = $job . " Status Change ";

                if($quote['status']=="ARRIVED"){
                    $q_status="In Queue";
                }else {

                    $q_status=$quote['status'];
                }


                if($request['note']!==null){

                    $data->event_detail=$job." Status Change from ".str_replace('_', ' ', strtoupper($q_status)). " to ".str_replace('_', ' ', strtoupper($request['status'])) ." With Message ".$request['note'];
                }else{
                    $data->event_detail=$job." Status Change from ".str_replace('_', ' ', strtoupper($q_status)). " to ".str_replace('_', ' ', strtoupper($request['status'])) ;

                }
                $data->type_id = $request['booking_id'];

                Log::saveLog($data);
            }



            if($request['status']=='READY_FOR_COLLECTION'){
                $status='READY_FOR_COLLECTION';
            }else{
                $status=$request['status'];

            }


            return response()->json([
                'status' => true,
                'message' => "Status Change to " . str_replace('_', ' ', strtoupper($status)) . " Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Status Booking ",
            ]);
        }
    }

    public function deleteBooking(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'id' =>  ['required'],




            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                $responseArr['status'] = false;
                return response()->json($responseArr);
            }


            $request['id'];


            $contact = Booking::find($request['id']);
            if (isset($contact)) {
                $contact->delete();
            }




            return response()->json([
                'status' => true,

                'message' => "Booking Delete Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Delete Booking",
            ]);
        }
    }
    public function deleteJob(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'id' =>  ['required'],




            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                $responseArr['status'] = false;
                return response()->json($responseArr);
            }


            $request['id'];


            Booking::find($request['id'])->update([
                'job_delete' => 1
            ]);





            return response()->json([
                'status' => true,

                'message' => "Job Delete Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Delete Booking",
            ]);
        }
    }

    public function issueInvoice(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'booking_id' =>  ['required'],




        ]);

        $single_booking = Booking::find($request['booking_id']);

        $latestOrder = Invoice::orderBy('created_at', 'DESC')->first();

        $invoice = Invoice::create([
            "vender_id" => $single_booking['vender_id'],
            "trading_id" => $single_booking['trading_id'],
            "invoice_no" => 'INV-' . "SVP" . str_pad($single_booking['vender_id'], 5, "0", STR_PAD_LEFT) . "-" . str_pad($latestOrder ? $latestOrder->id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT),
            "status" => $single_booking['total'] == 0 ? "PAID" : 'DUE',
            "booking_id" => $request['booking_id'],
            "contact_id" => $single_booking['contact_detail_id'],
            "total" => $single_booking['total'],
            "sub_total" => $single_booking['sub_total'],
            "vat" => $single_booking['vat'],
            'invoice_date' => $request['invoice_date'],
            'contact_email' => $request['email'],
            'address_line_1' => $request['address_line_1'],
            'address_line_2' => $request['address_line_2'],
            'address_line_3' => $request['address_line_3'],
            'address_line_4' => $request['address_line_4'],
            'city' => $request['city'],
            'postal_code' => $request['postal_code'],
            'mobile_no' => $request['mobile_no'],
            'name' => $request['name'],
            'company' => $request['company'],
        ]);

        $latestOrder = Log::orderBy('created_at', 'DESC')->first();
        $data = new stdClass();
        $data->log_no = 'lOG-' . "SVP" . str_pad($request->user()->id, 5, "0", STR_PAD_LEFT) . "-" . str_pad($latestOrder ? $latestOrder->id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT);
        $data->user_id = $request->user()->id;
        $data->type = "Invoice";
        $data->event = "Invoice Creating";
        $data->event_detail = "Invoice Creating";
        $data->type_id = $invoice['id'];

        Log::saveLog($data);

        // Booking::find($request['booking_id'])->update([
        //     "status" =>"DUE"
        // ]);

        $invoices = Invoice::with(['booking', 'booking.contact_detail', 'booking.service', 'booking.job_requests', 'booking.booking_items', 'booking.vehicle.vehicle_model', 'booking.vehicle.vehicle_make', 'booking.vehicle.engine_size', 'booking.vehicle.transmission_type', 'booking.vehicle.fuel_type', 'booking.vehicle.color', 'payments'])->where('vender_id', $single_booking['vender_id'])->find($invoice['id']);;
        $item_array = $invoices['booking']['booking_items'];



        $first_array = [];
        $second_array = [];
        $third_array = [];
        $count = 0;

        foreach ($item_array as $key => $value) {
            if ($count <= 9) {
                $first_array[$key] = $value;
            } else if ($count <= 18) {
                $second_array[$key] = $value;
            } else {
                $third_array[$key] = $value;
            }

            $count++;
        }





        // return $records;
        $data = [
            'invoice'    => $invoices,
            'vender' => User::with('profile')->find($invoices['vender_id']),
            'item_array' => $item_array,
            'first_array' => $first_array,
            'second_array' => $second_array,
            'third_array' => $third_array,
        ];
        $pdf = Pdf::loadView('pdf.invoice', $data);
        $content = $pdf->download()->getOriginalContent();
        file_put_contents('pdf/' . $invoices['invoice_no'] . time()  . ".pdf", $content);

        $data["email"] = $single_booking['contact_detail']['email'];
        $data["title"] = "Invoice Reminder";


        $files = [

            public_path('pdf/' . $invoices['invoice_no'] . time() . ".pdf"),
        ];

        Mail::send('email.invoice', $data, function ($message) use ($data, $files,$single_booking) {
            $message->to($single_booking['vender']["email"])
                ->subject($data["title"]);

            foreach ($files as $file) {
                $message->attach($file);
            }
        });

        return response()->json([
            'status' => true,

            'message' => "Invoice Create Successfully",
        ]);
    }
}
