<?php

namespace Modules\Vender\Http\Controllers\Api;

use Exception;
use App\Models\Log;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\JobType;
use Modules\Admin\Entities\CarMaker;
use Modules\Admin\Entities\CarModel;
use Modules\Admin\Entities\FuelType;
use Modules\Admin\Entities\Services;
use Modules\Vender\Entities\Booking;
use Modules\Vender\Entities\Invoice;
use Modules\Vender\Entities\Vehicle;
use Modules\Admin\Entities\PriceType;
use Modules\Admin\Entities\EngineSize;
use Modules\Vender\Entities\Quotation;
use Modules\Vender\Entities\JobRequest;
use Modules\Admin\Entities\VehicleColor;
use Modules\Vender\Entities\QuickProduct;
use Modules\Vender\Entities\ContactDetail;
use Illuminate\Contracts\Support\Renderable;
use Modules\Admin\Entities\TransmissionType;
use Modules\Vender\Entities\BookingJobRequest;
use Modules\Vender\Entities\CustomNotification;

class HelperController extends Controller
{

    //  Fetch VehicleMake

    public function getVehicleMake(Request $request)
    {
        try {



            $car_maker = CarMaker::get();
            foreach ($car_maker as $key => $value) {

                $car_maker[$key]['value']=$value['name'];
                # code...
            }
            return response()->json([
                'status' => true,
                'contact_details' => $car_maker,
                'message' => "Vehicle Make Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Vehicle Make",
            ]);
        }
    }
    //  Fetch Vehicle Modal

    public function getVehicleModel(Request $request)
    {
        try {



            $car_maker = CarModel::get();
            foreach ($car_maker as $key => $value) {

                $car_maker[$key]['value']=$value['name'];
                # code...
            }
            return response()->json([
                'status' => true,
                'contact_details' => $car_maker,
                'message' => "Vehicle Modal Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Vehicle Modal",
            ]);
        }
    }

    //  Fetch Vehicle Color

    public function getVehicleColor(Request $request)
    {
        try {



            $car_maker = VehicleColor::get();
            return response()->json([
                'status' => true,
                'contact_details' => $car_maker,
                'message' => "Vehicle Color Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Vehicle Color",
            ]);
        }
    }
    //  Fetch Engine Size

    public function getEngineSize(Request $request)
    {
        try {



            $car_maker = EngineSize::get();
            return response()->json([
                'status' => true,
                'contact_details' => $car_maker,
                'message' => "EngineSize Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting EngineSize",
            ]);
        }
    }
    //  Fetch TransmissionType

    public function getTransmissionType(Request $request)
    {
        try {



            $car_maker = TransmissionType::get();
            return response()->json([
                'status' => true,
                'contact_details' => $car_maker,
                'message' => "TransmissionType Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting TransmissionType",
            ]);
        }
    }
    //  Fetch getFuelType

    public function getFuelType(Request $request)
    {
        try {



            $car_maker = FuelType::get();
            return response()->json([
                'status' => true,
                'contact_details' => $car_maker,
                'message' => "Fuel Type Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Fuel Type",
            ]);
        }
    }
    //  Fetch Service

    public function fetchService(Request $request)
    {
        try {



            $services = Services::get();
            return response()->json([
                'status' => true,
                'services' => $services,
                'message' => "Service Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Service",
            ]);
        }
    }
    //  Fetch Job Type

    public function fetchJobType(Request $request)
    {
        try {



            $job_type = JobType::get();
            return response()->json([
                'status' => true,
                'job_type' => $job_type,
                'message' => "Job Type Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Job Type",
            ]);
        }
    }
    //  Fetch Price Type

    public function fetchPriceType(Request $request)
    {
        try {



            $price_type = PriceType::get();
            return response()->json([
                'status' => true,
                'price_type' => $price_type,
                'message' => "Price Type Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Price Type",
            ]);
        }
    }

    //  Fetch Quick Product

    public function fetchQuickJob(Request $request)
    {
        try {

            $trading_id = User::find($request->user()->id)['default_trading_unit'];


            $quick_job = QuickProduct::where('trading_id',$trading_id)->with(['job_type', 'job_coverage','job_types'])->with('job_types.jobtype')->get();
            return response()->json([
                'status' => true,
                'quick_job' => $quick_job,
                'message' => "Quick Job  Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Quick Job",
            ]);
        }
    }
    //  Fetch Quick Product

    public function fetchNotification(Request $request)
    {
        try {



            $notifications = CustomNotification::where('vender_id',$request->user()->id)->get();
            return response()->json([
                'status' => true,
                'notifications' => $notifications,
                'message' => "Quick Job  Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Quick Job",
            ]);
        }
    }
    public function clearNotification(Request $request)
    {
        try {



            $notifications = CustomNotification::where('vender_id',$request->user()->id)->delete();
            return response()->json([
                'status' => true,
                'notifications' => $notifications,
                'message' => "Notification Clear Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Notification",
            ]);
        }
    }
    //  Fetch Quotation Job

    public function fetchQuotationJob(Request $request)
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



            $quick_job = JobRequest::where('quotation_id',$request['quotation_id'])->get();
            return response()->json([
                'status' => true,
                'quick_job' => $quick_job,
                'message' => "Job  Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting  Job",
            ]);
        }
    }
    //  Fetch Quotation Job

    public function fetchBookingJob(Request $request)
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



            $quick_job = BookingJobRequest::where('booking_id',$request['booking_id'])->get();
            return response()->json([
                'status' => true,
                'quick_job' => $quick_job,
                'message' => "Job  Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting  Job",
            ]);
        }
    }
    //  Fetch Menu Count

    public function menuCount(Request $request)
    {
        try {


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;
            $trading_id = User::find($request->user()->id)['default_trading_unit'];

            $quotation_vender = Quotation::where('vender_id', $vender_id)->where('trading_id',$trading_id)->where('is_hub',0)->orderBy('id', 'desc')->get();
            $quotation_hub = Quotation::where('vender_id', $vender_id)->where('trading_id',$trading_id)->where('status','!=','DRAFT')->where('is_hub',1)->orderBy('id', 'desc')->get();

            $quotations = count($quotation_vender->merge($quotation_hub));
            $bookings = Booking::where('vender_id', $vender_id)->where('trading_id',$trading_id)->whereIn('status',['DRAFT', 'BOOKING_REQUEST', 'CUSTOMER_PENDING', 'BOOKED', 'RE_SCHEDULE', 'MISSED','DECLINE','ARRIVED', 'FINAL_CHECKS', 'DUE','COMPLETED','READ_FOR_COLLECTION','VOID','COLLECTED','DELIVERED','READY_FOR_DELIVERY'])->count();
            // $bookings += Booking::where('vender_id', $vender_id)->where('trading_id',$trading_id)->whereIn('status',[])->count();
            $booking_actives = Booking::where('vender_id', $vender_id)->where('trading_id',$trading_id)->whereIn('status',['INPROGRESS'])->count();
            $total_queues = Booking::where('vender_id', $vender_id)->where('trading_id',$trading_id)->whereIn('status',['ARRIVED', 'DIAGNOSING', 'DIAGNOSING_COMPLETE', 'PROGRESS'])->count();
            $complete_bookings = Booking::where('vender_id', $vender_id)->where('trading_id',$trading_id)->whereIn('status',['FINAL_CHECKS','READ_FOR_COLLECTION','READY_FOR_DELIVERY'])->count();
            $past_bookings = Booking::where('vender_id', $vender_id)->where('trading_id',$trading_id)->whereIn('status',['COLLECTED','DELIVERED','VOID','DUE'])->where('job_delete',0)->count();
            $cancelled_jobs = Booking::where('vender_id', $vender_id)->where('trading_id',$trading_id)->whereIn('status',['CANCELLED'])->where('job_id',"!=",0)->orderBy('id','desc')->count();
            $cancelled_job = Booking::where('vender_id', $vender_id)->where('trading_id',$trading_id)->whereIn('status',['CANCELLED'])->where('job_id',0)->orderBy('id','desc')->count();
            $total_invoices = Invoice::where('vender_id', $vender_id)->where('trading_id',$trading_id)->count();

            return response()->json([
                'status' => true,
                'vender_id'=>$vender_id,
                'total_quotations'=> $quotations,
                'total_bookings'=> $bookings+$cancelled_job,
                'total_inprogress_bookings'=> $booking_actives,
                'total_completed_bookings'=> $complete_bookings,
                'total_past_jobs'=> $past_bookings+$cancelled_jobs,
                'total_queues'=> $total_queues,
                'total_invoice'=> $total_invoices,
                'total_contacts'=> ContactDetail::where('vender_id', $vender_id)->where('trading_id',$trading_id)->where('contact_no','!=',null)->count(),
                'total_vehicles'=> Vehicle::where('vender_id', $vender_id)->where('trading_id',$trading_id)->where('vehicle_no','!=',null)->count(),
                'message' => "Fetch Menu Successfully",
            ]);


        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting  Menu",
            ]);
        }
    }


    public function saveLog($data){


        Log::create([

            'user_id'=>$data->user_id,
            'type'=>$data->type,
            'event'=>$data->event,
            'event_detail'=>$data->event_detail,
            'type_id'=>$data->type_id,
        ]);

        return true;
    }
}
