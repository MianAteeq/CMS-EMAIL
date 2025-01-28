<?php

namespace Modules\Vender\Http\Controllers;

use App\Models\Log;
use App\Models\User;
use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Vender\Entities\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Modules\Vender\Entities\Booking;
use Modules\Vender\Entities\BookingTransaction;
use stdClass;

class InvoiceController extends Controller
{
    public function getInvoices(Request $request)
    {
        try {


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $invoices = Invoice::with(['booking', 'booking.contact_detail', 'booking.service', 'booking.job_requests', 'booking.booking_items', 'booking.vehicle.vehicle_model', 'booking.vehicle.vehicle_make', 'booking.vehicle.engine_size', 'booking.vehicle.transmission_type', 'booking.vehicle.fuel_type', 'booking.vehicle.color', 'payment', 'payments'])->where('vender_id', $vender_id)->orderBy('invoice_date','desc')->limit(20)->get();
            return response()->json([
                'status' => true,
                'invoices' => $invoices,
                'message' => "Invoice Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Invoice",
            ]);
        }
    }
    public function fetchSingleInvoice(Request $request)
    {
        try {

            $validator = \Validator::make($request->all(), [
                'invoice_id' =>  ['required'],


            ]);
            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }

            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $invoices = Invoice::with(['booking', 'booking.contact_detail', 'booking.service', 'booking.job_requests', 'booking.booking_items', 'booking.booking_items.price_type', 'booking.vehicle.vehicle_model', 'booking.vehicle.vehicle_make', 'booking.vehicle.engine_size', 'booking.vehicle.transmission_type', 'booking.vehicle.fuel_type', 'booking.vehicle.color', 'payment', 'payments', 'job_logs'])->where('vender_id', $vender_id)->find($request['invoice_id']);

            $invoices['invoice_item'] = $invoices['booking']['booking_items'];
            return response()->json([
                'status' => true,
                'invoice' => $invoices,
                'message' => "Invoice Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Invoice",
            ]);
        }
    }
    public function sendMail(Request $request)
    {
        try {

            $validator = \Validator::make($request->all(), [
                'invoice_id' =>  ['required'],


            ]);
            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }

            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $invoices = Invoice::with(['booking', 'booking.contact_detail', 'booking.service', 'booking.job_requests', 'booking.booking_items', 'booking.booking_items.price_type', 'booking.vehicle.vehicle_model', 'booking.vehicle.vehicle_make', 'booking.vehicle.engine_size', 'booking.vehicle.transmission_type', 'booking.vehicle.fuel_type', 'booking.vehicle.color', 'payment', 'payments', 'job_logs'])->where('vender_id', $vender_id)->find($request['invoice_id']);

            $item_array = $invoices['booking']['booking_items'];



            $first_array = [];
            $second_array = [];
            $third_array = [];
            $count = 0;

            foreach ($item_array as $key => $value) {
                if ($count <= 9) {
                    $first_array[$key] = $value;
                    $first_array[$key]->totalPrice = $value['total_price'];
                } else if ($count <= 19) {
                    $second_array[$key] = $value;
                    $second_array[$key]['totalPrice'] = $value['total_price'];
                } else {
                    $third_array[$key] = $value;
                    $third_array[$key]['totalPrice'] = $value['total_price'];
                }

                $count++;
            }

            $data = [
                'invoice'    => $invoices,
                'vender' => User::with('profile')->find($invoices['vender_id']),
                'item_array' => $item_array,
                'first_array' => $first_array,
                'second_array' => $second_array,
                'third_array' => $third_array,
            ];
            $pdf = Pdf::loadView('pdf.invoice',$data);
            $content = $pdf->download()->getOriginalContent();
            file_put_contents('pdf/' . $invoices['invoice_no'].time()  . ".pdf", $content);
            $files = [

                public_path('pdf/' . $invoices['invoice_no'] . time() . ".pdf"),
            ];
        Mail::send('email.invoice', $data, function ($message) use ($data, $files,$request) {
                $message->to($request["email"])
                    ->subject('Invoice Reminder');

                foreach ($files as $file) {
                    $message->attach($file);
                }
            });
            return response()->json([
                'status' => true,
                'invoice' => $invoices,
                'message' => "Invoice Email Send Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Invoice",
            ]);
        }
    }
    public function sendPaymentMail(Request $request)
    {
        try {

            $validator = \Validator::make($request->all(), [
                'payment_id' =>  ['required'],


            ]);
            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }

            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $invoices = BookingTransaction::with('invoice')->where('vender_id', $vender_id)->find($request['payment_id']);

            $item_array = [];



            $first_array = [];
            $second_array = [];
            $third_array = [];
            $count = 0;

            foreach ($item_array as $key => $value) {
                if ($count <= 9) {
                    $first_array[$key] = $value;
                    $first_array[$key]['totalPrice'] = $value['total_price'];
                } else if ($count <= 19) {
                    $second_array[$key] = $value;
                    $second_array[$key]['totalPrice'] = $value['total_price'];
                } else {
                    $third_array[$key] = $value;
                    $third_array[$key]['totalPrice'] = $value['total_price'];
                }

                $count++;
            }
            $data = [
                'invoice'    => $invoices,
                'vender' => User::with('profile')->find($invoices['vender_id']),
                'item_array' => $item_array,
                'first_array' => $first_array,
                'second_array' => $second_array,
                'third_array' => $third_array,
            ];
            $pdf = Pdf::loadView('pdf.payment',$data);
            $content = $pdf->download()->getOriginalContent();
            file_put_contents('pdf/' . $invoices['pay_no'].time()  . ".pdf", $content);
            $files = [

                public_path('pdf/' . $invoices['pay_no'] . time() . ".pdf"),
            ];
            Mail::send('email.payment', $data, function ($message) use ($data, $files,$request) {
                $message->to($request["email"])
                    ->subject('Payment Receipt');

                foreach ($files as $file) {
                    $message->attach($file);
                }
            });
            return response()->json([
                'status' => true,
                'invoice' => $invoices,
                'message' => "Payment Receipt Email Send Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Invoice",
            ]);
        }
    }

    public function fetchInvoicePdf(Request $request)
    {
        try {

            $validator = \Validator::make($request->all(), [
                'invoice_id' =>  ['required'],


            ]);
            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }

            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $invoices = Invoice::with(['booking', 'booking.contact_detail', 'booking.service', 'booking.job_requests', 'booking.booking_items', 'booking.vehicle.vehicle_model', 'booking.vehicle.vehicle_make', 'booking.vehicle.engine_size', 'booking.vehicle.transmission_type', 'booking.vehicle.fuel_type', 'booking.vehicle.color', 'payments'])->where('vender_id', $vender_id)->find($request['invoice_id']);;
            $item_array = $invoices['booking']['booking_items'];

            $first_array = [];
            $second_array = [];
            $third_array = [];
            $count = 0;

            foreach ($item_array as $key => $value) {
                if ($count <= 9) {
                    $first_array[$key] = $value;
                    $first_array[$key]['totalPrice'] = $value['total_price'];
                } else if ($count <= 19) {
                    $second_array[$key] = $value;
                    $second_array[$key]['totalPrice'] = $value['total_price'];
                } else {
                    $third_array[$key] = $value;
                    $third_array[$key]['totalPrice'] = $value['total_price'];
                }

                $count++;
            }





            // return User::with('profile')->find(auth()->user()->id);
            $data = [
                'invoice'    => $invoices,
                'vender' => User::with('profile')->find(auth()->user()->id),
                'item_array' => $item_array,
                'first_array' => $first_array,
                'second_array' => $second_array,
                'third_array' => $third_array,
            ];

            //     // return $records;
            //     $data = [
            //         'invoice'    => $invoices,
            //         'vender'=>User::with('profile')->find($invoices['vender_id']),
            //         'item_array'=>$item_array
            //    ];
            $pdf = Pdf::loadView('pdf.invoice', $data);
            $content = $pdf->download()->getOriginalContent();
            file_put_contents('pdf/' . $invoices['invoice_no'] . time()  . ".pdf", $content);

            return response()->json([
                'status' => true,
                'invoice' => asset('pdf/' . $invoices['invoice_no'] . time() . ".pdf"),
                // 'invoice' => $pdf->download('invoice.pdf'),

                'message' => "Invoice Pdf Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Invoice",
            ]);
        }
    }
    public function fetchPaymentPdf(Request $request)
    {
        try {

            $validator = \Validator::make($request->all(), [
                'payment_id' =>  ['required'],


            ]);
            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }

            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $invoices = BookingTransaction::with('invoice')->where('vender_id', $vender_id)->find($request['payment_id']);;
            $item_array = [];

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

            //     // return $records;
            //     $data = [
            //         'invoice'    => $invoices,
            //         'vender'=>User::with('profile')->find($invoices['vender_id']),
            //         'item_array'=>$item_array
            //    ];
            $pdf = Pdf::loadView('pdf.payment', $data);
            $content = $pdf->download()->getOriginalContent();
            file_put_contents('pdf/' . $invoices['pay_no'] . time()  . ".pdf", $content);

            return response()->json([
                'status' => true,
                'invoice' => asset('pdf/' . $invoices['pay_no'] . time() . ".pdf"),
                // 'invoice' => $pdf->download('invoice.pdf'),

                'message' => "Payment Pdf Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Invoice",
            ]);
        }
    }


    public function index()
    {

        $vender_id = auth()->user()->id;

        $invoices = Invoice::with(['booking', 'booking.contact_detail', 'booking.service', 'booking.job_requests', 'booking.booking_items', 'booking.vehicle.vehicle_model', 'booking.vehicle.vehicle_make', 'booking.vehicle.engine_size', 'booking.vehicle.transmission_type', 'booking.vehicle.fuel_type', 'booking.vehicle.color', 'payment'])->where('vender_id', $vender_id)->limit(20)->get();





        return view('vender::invoice.index', get_defined_vars());
    }

    public function printInvoice($id)
    {
        $vender_id = auth()->user()->id;

        $invoice = Invoice::with(['booking', 'booking.contact_detail', 'booking.service', 'booking.job_requests', 'booking.booking_items', 'booking.vehicle.vehicle_model', 'booking.vehicle.vehicle_make', 'booking.vehicle.engine_size', 'booking.vehicle.transmission_type', 'booking.vehicle.fuel_type', 'booking.vehicle.color', 'payment'])->where('vender_id', $vender_id)->find($id);


        return view('vender::invoice.final_invoice', get_defined_vars());
    }


    public function payInvoice(Request $request)
    {
        try {

            $validator = \Validator::make($request->all(), [
                'invoice_id' =>  ['required'],
                'payment_date' =>  ['required', 'date'],
                'payment_type' =>  ['required'],
                'payment_method' =>  ['required'],
                'amount' =>  ['required', 'numeric'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }

            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $invoice = Invoice::find($request['invoice_id']);
            $previous_paid = BookingTransaction::where('invoice_id', $request['invoice_id'])->sum('amount');

            $previous_paid = $previous_paid + $request['amount'];
            $latestOrder = BookingTransaction::orderBy('created_at', 'DESC')->first();

            if (isset($invoice)) {

                if ($invoice['status'] == "PAID" && $request['payment_type'] != "Refund") {
                    return response()->json([
                        'status' => false,
                        'message' => "Invoice Already Paid",
                    ]);
                }
                BookingTransaction::create([
                    'vender_id' => $vender_id,
                    "pay_no" => 'PAY-' . "SVP" . str_pad($vender_id, 5, "0", STR_PAD_LEFT) . "-" . str_pad($latestOrder ? $latestOrder->id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT),
                    'invoice_id' => $request['invoice_id'],
                    'payment_date' => $request['payment_date'],
                    'payment_type' => $request['payment_type'],
                    'payment_method' => $request['payment_method'],
                    'amount' => $request['amount'],
                    'payment_ref' => $request['payment_ref'],
                ]);

                if ($previous_paid == $invoice['total']) {


                    $invoice->status = "PAID";
                    $invoice->update();

                    // Booking::find($invoice['booking_id'])->update([

                    //     'status'=>'COMPLETED'

                    // ]);
                }
                if ($previous_paid < $invoice['total']) {
                    $invoice->status = "DUE";
                    $invoice->update();

                    // Booking::find($invoice['booking_id'])->update([

                    //     'status'=>'DUE'

                    // ]);
                }
                if ($previous_paid > $invoice['total']) {
                    $invoice->status = "CREDIT";
                    $invoice->update();

                    // Booking::find($invoice['booking_id'])->update([

                    //     'status'=>'DUE'

                    // ]);
                }

                $latestOrder = Log::orderBy('created_at', 'DESC')->first();
                $data = new stdClass();
                $data->log_no = 'lOG-' . "SVP" . str_pad($request->user()->id, 5, "0", STR_PAD_LEFT) . "-" . str_pad($latestOrder ? $latestOrder->id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT);
                $data->user_id = $request->user()->id;
                $data->type = "Invoice";
                $data->event = "Invoice Payment";
                $data->event_detail = "Invoice Payment Received";
                $data->type_id = $request['invoice_id'];

                Log::saveLog($data);



                return response()->json([
                    'status' => true,
                    'message' => "Invoice Paid Successfully",
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => "Error while Paying Invoice",
                ]);
            }
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Paying Invoice",
            ]);
        }
    }

    public function voidInvoice(Request $request)
    {
        try {
            $validator = \Validator::make($request->all(), [
                'invoice_id' =>  ['required'],


            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }
            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $invoice = Invoice::find($request['invoice_id']);

            //    Booking::find($invoice['booking_id'])->update([

            //     'status'=>'READY_FOR_COLLECTION'
            //    ]);

            Invoice::find($request['invoice_id'])->update([
                "status" => "REJECTED"
            ]);

            $latestOrder = Log::orderBy('created_at', 'DESC')->first();
            $data = new stdClass();
            $data->log_no = 'lOG-' . "SVP" . str_pad($request->user()->id, 5, "0", STR_PAD_LEFT) . "-" . str_pad($latestOrder ? $latestOrder->id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT);
            $data->user_id = $request->user()->id;
            $data->type = "Invoice";
            $data->event = "Invoice Void";
            $data->event_detail = "Invoice Void";
            $data->type_id = $request['invoice_id'];

            Log::saveLog($data);




            return response()->json([
                'status' => true,
                'message' => "Invoice Void Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Status Invoice ",
            ]);
        }
    }
}
