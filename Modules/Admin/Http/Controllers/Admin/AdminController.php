<?php

namespace Modules\Admin\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Vender\Entities\Booking;
use Modules\Vender\Entities\BookingTransaction;
use Modules\Vender\Entities\Invoice;
use Modules\Vender\Entities\Quotation;
use Modules\Vender\Entities\Transaction;

class AdminController extends Controller
{
    public function index()
    {

       $subscribers=User::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->count();
       $total_earnings=Transaction::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('amount');

       $total_earnings+=BookingTransaction::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('amount');

       $earningLabels=[];
       $earningValue=[];
     
        $now = Carbon::now();
        $startOfMonth = $now->startOfMonth()->format('Y-m-d');
        $endOfMonth = $now->endOfMonth()->format('Y-m-d');
        $periods = CarbonPeriod::create($startOfMonth, $endOfMonth);

        foreach ($periods as  $period) {

            $transactions = Transaction::whereDate('created_at', $period)->sum('amount');
            $transactions += BookingTransaction::whereDate('created_at', $period)->sum('amount');

            if($transactions>0){

                array_push($earningValue,floatval($transactions));
                array_push($earningLabels,$period);
            }


            
            
        }

        $total_jobs=Booking::count();
        $complete_jobs=Booking::where('status', 'COMPLETED')->count();
        $total_work_shop = User::count();

        $quotations=Quotation::with('service')->orderBy('id','desc')->take(5)->get();
        $invoices=Invoice::orderBy('id','desc')->take(5)->get();


        // return get_defined_vars();

       
      

        return view('admin::admin.index',get_defined_vars());
    }
}
