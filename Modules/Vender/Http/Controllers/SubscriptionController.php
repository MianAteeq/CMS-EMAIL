<?php

namespace Modules\Vender\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;
use Modules\Vender\Entities\VenderInvoice;
use Illuminate\Contracts\Support\Renderable;
use Modules\Vender\Entities\PackageSubscription;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        $subscriptions=PackageSubscription::with('plan')->where('vender_id',auth()->user()->id)->get();
        return view('vender::subscription.index',get_defined_vars());
    }

    public function invoice()
    {
        $subscriptions=VenderInvoice::with('inv_plan')->where('vender_id',auth()->user()->id)->get();

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));






        return view('vender::subscription.invoice',get_defined_vars());
    }
    public function invoiceDetail($id)
    {





        $invoice=VenderInvoice::find($id);

        if($invoice['status']=="paid"){



        $str=$invoice['pdf'];
        $pdf= explode("/",$str);

        $str="https://invoicedata.stripe.com/invoice_receipt_file_url/acct_1MM85pBv6oafSIoJ/".$pdf[5];

        $response = Http::get($str);

        $pdf=json_decode($response)->file_url??$invoice['pdf'];
        }else{
            $pdf=$invoice['pdf'];
        }


        // return $invoice;



        return view('vender::subscription.invoice_detail',get_defined_vars());
    }
    public function subscriptionDetail($id)
    {
        $invoice=PackageSubscription::find($id);






        return view('vender::subscription.subscription_detail',get_defined_vars());
    }


    public function invoicePay($id)

    {

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $invoice=VenderInvoice::find($id);
        $payment_method= $stripe->paymentMethods->all([
            'type' => 'bacs_debit',
            'limit' => 1,
            'customer' =>auth()->user()->profile['customer_id'],
        ]);

        $stripe->invoices->pay($invoice['invoice_id'],
        ['payment_method' => $payment_method['data'][0]]);





        VenderInvoice::find($id)->update([

            'amount_paid' => $invoice['amount_due'],
            'status' =>'paid',
        ]);



        return redirect()->route('vender.invoice.index')->with('message', 'Invoice Pay Successfully');
    }


    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('vender::create');
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
