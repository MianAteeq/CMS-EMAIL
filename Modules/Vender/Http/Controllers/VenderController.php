<?php

namespace Modules\Vender\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Modules\Admin\Entities\Packages;
use Modules\Admin\Entities\WarrantyJob;
use Modules\Vender\Entities\Booking;
use Modules\Vender\Entities\BookingTransaction;
use Modules\Vender\Entities\ContactDetail;
use Modules\Vender\Entities\Invoice;
use Modules\Vender\Entities\Quotation;
use Modules\Vender\Entities\Transaction;
use Modules\Vender\Entities\Vehicle;

class VenderController extends Controller
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

        $quotations=Quotation::where('vender_id',auth()->user()->id)->get();
        $completed_jobs=Booking::where('vender_id',auth()->user()->id)->where('status', 'COMPLETED')->get();
        $total_contacts=ContactDetail::where('vender_id',auth()->user()->id)->get();
        $total_vehicles=Vehicle::where('vender_id',auth()->user()->id)->get();
        $invoice_paid=Invoice::where('vender_id',auth()->user()->id)->where('status', 'PAID')->sum('total');
        $news_jobs = Booking::where('vender_id', auth()->user()->id)->where('status', 'PENDING')->get();
        $inprocess_jobs = Booking::where('vender_id', auth()->user()->id)->where('status', 'INPROGRESS')->get();
        $cancel_jobs = Booking::where('vender_id', auth()->user()->id)->where('status', 'REJECTED')->get();

        // Warranty Jobs


        $transactions=BookingTransaction::orderBy('id','desc')->take(5)->get();

       




        return view('vender::index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function package()
    {
        $packages=Packages::where('status',0)->get();
        return view('vender::package.package',get_defined_vars());
    }
    public function viewPackage($id)
    {
        $package=Packages::find($id);
        return view('vender::package.checkout',get_defined_vars());
    }

   
    public function checkoutSubmit(Request $request){

        $user=Auth::user();
        $anchor = Carbon::now();
        $package=Packages::find($request['package_id']);
        $sub = $user->newSubscription($package->name, $package->stripe_price_id)->anchorBillingCycleOn($anchor->addDays(1))
            ->noProrate()
            ->create($request->stripe_token, [
                'email' => $user->email,
            ]);

        Transaction::create([
            'user_id' => $user->id,
            'payment_method' => 'stripe',
            'payment_id' => $sub->stripe_id,
            'package_id' =>  $package->id,
            'amount' => $package->price,

        ]);

        return Response::json(array(
            'success' => true,
            'errors' => "Subscription Buy Successfully"

        ));
            
    }
}
