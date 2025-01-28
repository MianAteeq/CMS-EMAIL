<?php

namespace Modules\ClientHub\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Vender\Entities\Booking;
use Modules\Vender\Entities\BookingTransaction;
use Modules\Vender\Entities\Invoice;

class InvoiceController extends Controller
{
    public function getInvoices(Request $request)
    {
        try {




            $invoices = Invoice::with(['booking', 'booking.contact_detail', 'booking.service', 'booking.job_requests', 'booking.booking_items', 'booking.vehicle.vehicle_model', 'booking.vehicle.vehicle_make', 'booking.vehicle.engine_size', 'booking.vehicle.transmission_type', 'booking.vehicle.fuel_type', 'booking.vehicle.color', 'payment'])->
            whereHas('contact', function($q) use($request){
                $q->where('hub_id', '=', $request->user()->id);
            })->limit(20)->get();
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

            // $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $invoices = Invoice::with(['booking', 'booking.contact_detail', 'booking.service', 'booking.job_requests', 'booking.booking_items', 'booking.vehicle.vehicle_model', 'booking.vehicle.vehicle_make', 'booking.vehicle.engine_size', 'booking.vehicle.transmission_type', 'booking.vehicle.fuel_type', 'booking.vehicle.color', 'payment'])->find($request['invoice_id']);

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

            // $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $invoices = Invoice::with(['booking', 'booking.contact_detail', 'booking.service', 'booking.job_requests', 'booking.booking_items', 'booking.vehicle.vehicle_model', 'booking.vehicle.vehicle_make', 'booking.vehicle.engine_size', 'booking.vehicle.transmission_type', 'booking.vehicle.fuel_type', 'booking.vehicle.color',])->find($request['invoice_id']);;
            if (file_exists(public_path('pdf/' . $invoices['invoice_no'] . ".pdf"))) {
            } else {
                $pdf = Pdf::loadView('pdf.invoice');
                $content = $pdf->download()->getOriginalContent();
                file_put_contents('pdf/' . $invoices['invoice_no'] . ".pdf", $content);
            }

            return response()->json([
                'status' => true,
                'invoice' => asset('pdf/' . $invoices['invoice_no'] . ".pdf"),
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

            $vender_id = $request->user()->id;

            $invoice = Invoice::find($request['invoice_id']);

            if (isset($invoice)) {

                if ($invoice['status'] == "PAID") {
                    return response()->json([
                        'status' => false,
                        'message' => "Invoice Already Paid",
                    ]);
                }
                BookingTransaction::create([
                    'vender_id' => $invoice->vender_id,
                    'contact_id' => $invoice->contact_id,
                    'invoice_id' => $request['invoice_id'],
                    'payment_date' => $request['payment_date'],
                    'payment_type' => $request['payment_type'],
                    'payment_method' => $request['payment_method'],
                    'amount' => $request['amount'],
                    'payment_ref' => $request['payment_ref'],
                    'payment_id' => $request['payment_id']??null,
                ]);

                $invoice->status = "PAID";
                $invoice->update();


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

    public function paymentIntent(Request $request)
    {
        $stripe = new \Stripe\StripeClient(
            env('STRIPE_SECRET')
        );
        $paymentIntent=    $stripe->paymentIntents->create([
            'amount' => 2000,
            'currency' => 'gbp',
            'payment_method_types' => ['card'],
        ]);
        echo json_encode(
            [
                'paymentIntent' => $paymentIntent->client_secret,
                // 'ephemeralKey' => $ephemeralKey->secret,

                'publishableKey' => env('STRIPE_KEY')
            ]
        );
        http_response_code(200);
        }

}
