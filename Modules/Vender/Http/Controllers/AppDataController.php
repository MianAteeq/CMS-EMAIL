<?php

namespace Modules\Vender\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Vender\Entities\Booking;
use Modules\Vender\Entities\Invoice;
use Modules\Vender\Entities\Vehicle;
use Modules\Vender\Entities\Quotation;
use Modules\Vender\Entities\ContactDetail;
use Illuminate\Contracts\Support\Renderable;
use Modules\Vender\Entities\BookingTransaction;

class AppDataController extends Controller
{
   public function contact()  {

    $user=auth()->user();

    $vender_id=0;

    if($user['vender_id']==0){
        $vender_id=$user['id'];
    }else{
        $vender_id=$user['vender_id'];
    }

    $contacts=ContactDetail::where('vender_id',$vender_id)->get();


    return view('vender::service_provider.app_data.contact',get_defined_vars());

   }
   public function vehicle()  {
    $user=auth()->user();

    $vender_id=0;

    if($user['vender_id']==0){
        $vender_id=$user['id'];
    }else{
        $vender_id=$user['vender_id'];
    }

    $contacts=Vehicle::where('vender_id',$vender_id)->get();


    return view('vender::service_provider.app_data.vehicle',get_defined_vars());

   }
   public function quotes()  {

    $user=auth()->user();

    $vender_id=0;

    if($user['vender_id']==0){
        $vender_id=$user['id'];
    }else{
        $vender_id=$user['vender_id'];
    }

    $contacts=Quotation::where('vender_id',$vender_id)->get();


    return view('vender::service_provider.app_data.quotes',get_defined_vars());

   }

   public function booking()  {
    $user=auth()->user();

    $vender_id=0;

    if($user['vender_id']==0){
        $vender_id=$user['id'];
    }else{
        $vender_id=$user['vender_id'];
    }

    $contacts=Booking::where('vender_id',$vender_id)->get();


    return view('vender::service_provider.app_data.booking',get_defined_vars());

   }
   public function invoices()  {

    $user=auth()->user();

    $vender_id=0;

    if($user['vender_id']==0){
        $vender_id=$user['id'];
    }else{
        $vender_id=$user['vender_id'];
    }

    $contacts=Invoice::where('vender_id',$vender_id)->get();


    return view('vender::service_provider.app_data.invoices',get_defined_vars());

   }
   public function payments()  {
    $user=auth()->user();

    $vender_id=0;

    if($user['vender_id']==0){
        $vender_id=$user['id'];
    }else{
        $vender_id=$user['vender_id'];
    }

    $contacts=BookingTransaction::where('vender_id',$vender_id)->get();


    return view('vender::service_provider.app_data.payments',get_defined_vars());

   }

   public function jobs()  {
    $user=auth()->user();

    $vender_id=0;

    if($user['vender_id']==0){
        $vender_id=$user['id'];
    }else{
        $vender_id=$user['vender_id'];
    }

    $contacts=Booking::with([
        'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
        'contact_detail', 'service', 'job_requests', 'booking_items','job_requests.job_types','job_requests.job_types.job_type',
    ])->where('vender_id', $vender_id)->whereIn('status', ['ARRIVED','INPROGRESS','FINAL_CHECKS','READ_FOR_COLLECTION','READY_FOR_DELIVERY','COLLECTED','DELIVERED'])->get();


    return view('vender::service_provider.app_data.jobs',get_defined_vars());

   }
}
