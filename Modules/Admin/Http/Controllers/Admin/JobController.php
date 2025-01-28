<?php

namespace Modules\Admin\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Vender\Entities\Booking;
use Modules\Vender\Entities\Invoice;

class JobController extends Controller
{
   public function index()
   {
      if(isset($_REQUEST['status'])){

         if($_REQUEST['status']=="ALL"){
            $jobs = Booking::orderBy('id', 'desc')->get();
            $today_jobs = Booking::whereDate('created_at', Carbon::now())->count();
            $monthly_jobs = Booking::whereMonth('created_at', Carbon::now()->month)->count();
            $today_earning = Booking::whereDate('created_at', Carbon::now())->sum('total');
            $monthly_earning = Booking::whereMonth('created_at', Carbon::now()->month)->sum('total');
            return view('admin::admin.job.index', get_defined_vars());

         }else{

            $jobs = Booking::orderBy('id', 'desc')->where('status', $_REQUEST['status'])->get();
            $today_jobs = Booking::whereDate('created_at', Carbon::now())->where('status', $_REQUEST['status'])->count();
            $monthly_jobs = Booking::whereMonth('created_at', Carbon::now()->month)->where('status', $_REQUEST['status'])->count();
            $today_earning = Booking::whereDate('created_at', Carbon::now())->where('status', $_REQUEST['status'])->sum('total');
            $monthly_earning = Booking::whereMonth('created_at', Carbon::now()->month)->where('status', $_REQUEST['status'])->sum('total');
            return view('admin::admin.job.index', get_defined_vars());
         }

      }else{

      
      $jobs=Booking::orderBy('id','desc')->get();
      $today_jobs=Booking::whereDate('created_at',Carbon::now())->count();
      $monthly_jobs=Booking::whereMonth('created_at',Carbon::now()->month)->count();
      $today_earning=Booking::whereDate('created_at',Carbon::now())->sum('total');
      $monthly_earning=Booking::whereMonth('created_at',Carbon::now()->month)->sum('total');
        return view('admin::admin.job.index',get_defined_vars());
      }
   }

   public function printJob($id)
   {
      $quotation = Booking::with(['vehicle', 'contact_detail', 'booking_items'])->find($id);

      return view('vender::invoice.booking', get_defined_vars());
   }
}
