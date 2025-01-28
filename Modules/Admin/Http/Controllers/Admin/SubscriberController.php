<?php

namespace Modules\Admin\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Modules\Admin\Entities\Packages;
use Modules\Vender\Entities\Transaction;
use Modules\Vender\Entities\VenderInvoice;
use Modules\Vender\Entities\PackageSubscription;

class SubscriberController extends Controller
{
    public function newVender()
    {
        $subscribers=User::where('vender_id',0)->where('status','INACTIVE')->orderBy('id','desc')->get();

        $earning_month=Transaction::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('amount');
        return view('admin::admin.subscriber.new_vender',get_defined_vars());
    }
    public function index()
    {
        $subscriptions=PackageSubscription::wherehas('plan')->orderBy('id','desc')->get();
        return view('admin::admin.subscriber.index',get_defined_vars());
    }
    public function invoice()
    {
        $subscriptions=VenderInvoice::with('inv_plan')->get();

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));







        return view('admin::admin.subscriber.invoice',get_defined_vars());
    }
    public function payments()
    {
        $subscriptions=VenderInvoice::with('inv_plan')->get();







        return view('admin::admin.subscriber.payments',get_defined_vars());
    }

    public function invoiceDetail($id)
    {


        $invoice=VenderInvoice::find($id);

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));






        return view('admin::admin.subscriber.invoice_detail',get_defined_vars());
    }

    public function paymentDetail($id)
    {


        $invoice=VenderInvoice::find($id);

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));






        return view('admin::admin.subscriber.payment_detail',get_defined_vars());
    }

    public function subscriptionDetail($id)
    {
        $invoice=PackageSubscription::find($id);

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));






        return view('admin::admin.subscriber.subscription_detail',get_defined_vars());
    }

    public function add(Request $request)
    {
        return view('admin::admin.subscriber.add');
    }


    public function viewSubscriber($id)
    {
        $subscriber=User::find($id);
        return view('admin::admin.subscriber.single_vender',get_defined_vars());
    }

    public function approve($id)
    {
        $user=User::find($id);

        $user->status="ACTIVE";
        $user->update();

        $packages=Packages::all();

        Mail::send('email.approve', get_defined_vars(), function ($send) use ($user) {
            $send->to($user['email'])->subject("Approve Email");
        });

        return redirect()->back();


    }
    public function unapprove($id)
    {

        $user = User::find($id);

        $user->status = "INACTIVE";
        $user->update();

        return redirect()->back();
    }
}
