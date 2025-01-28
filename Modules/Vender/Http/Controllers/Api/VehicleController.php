<?php

namespace Modules\Vender\Http\Controllers\Api;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Vender\Entities\Booking;
use Modules\Vender\Entities\Vehicle;
use Modules\Vender\Entities\Quotation;
use Modules\Vender\Entities\ContactDetail;
use Illuminate\Contracts\Support\Renderable;

class VehicleController extends Controller
{

    //  Save Vehicle Detail

    public function saveVehicleDetail(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'vrm' =>  ['required', 'string', 'max:255'],
                'vehicle_make_id' => 'required',
                'vehicle_model_id' => 'required',




            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;
            $trading_id = User::find($request->user()->id)['default_trading_unit'];

            $exists=Vehicle::where('vrm',$request['vrm'])->where('vehicle_make_id',$request['vehicle_make_id'])->where('vehicle_model_id',$request['vehicle_model_id'])->first();
            $latestOrder = Vehicle::orderBy('created_at', 'DESC')->first();
            if($exists){
                $responseArr['message'] = "Duplicate Vrm for Vehicle make and Model";
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $veh= Vehicle::create([
                "vender_id" => $vender_id,
                 "vehicle_no"=>'VEH-'."SVP".str_pad($vender_id, 5, "0", STR_PAD_LEFT)."-". str_pad($latestOrder?$latestOrder->id+1: 0 + 1, 5, "0", STR_PAD_LEFT),
                'type'=>"Vender",
                'trading_id'=>$trading_id,
                'year'=>$request['year']??' ',
                ...$request->except('year'),
            ]);

            $vehicles=Vehicle::with(['vehicle_make', 'vehicle_model', 'engine_size', 'transmission_type', 'fuel_type', 'color', 'contact'])->with('jobs','quotes','bookings')->withCount('quotes')->withCount('bookings')->withCount('jobs')->where('vender_id', $vender_id)->find($veh['id']);
            return response()->json([
                'status' => true,
                'contact_detail' => $vehicles,
                'message' => "Vehicle Added Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' =>  "Error while save Vehicle",
            ]);
        }
    }

    // Get Vehicle Detail

    public function getVehicleDetail(Request $request)
    {


        try {

            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;
            $trading_id = User::find($request->user()->id)['default_trading_unit'];

            $contacts = Vehicle::with(['vehicle_make', 'vehicle_model', 'engine_size', 'transmission_type', 'fuel_type', 'color', 'contact'])->with('quotes','bookings','jobs')->withCount('quotes')->withCount('bookings')->withCount('jobs')->where('vender_id', $vender_id)->where('trading_id', $trading_id)->where('vehicle_no','!=',null)->orderBy('id','desc')->paginate(10);
            return response()->json([
                'status' => true,
                'contact_details' => $contacts,
                'message' => "Vehicles Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Vehicles",
            ]);
        }
    }
    public function getSingleVehicleDetail(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'vehicle_id' =>  ['required', 'max:255'],



            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                $responseArr['status'] = false;
                return response()->json($responseArr);
            }

            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $contacts = Vehicle::with(['vehicle_make', 'vehicle_model', 'engine_size', 'transmission_type', 'fuel_type', 'color', 'contact'])->with('quotes','bookings','jobs','jobs.contact_detail','jobs.vehicle',  'jobs.vehicle.vehicle_model', 'jobs.vehicle.vehicle_make', 'jobs.job_requests', 'jobs.job_requests.product', 'jobs.job_requests.price_type', 'jobs.booking_items', 'jobs.booking_items.price_type', 'jobs.job_requests.job_types', 'jobs.job_requests.job_types.job_type',)->withCount('quotes')->withCount('bookings')->withCount('jobs')->where('vender_id', $vender_id)->where('vehicle_no','!=',null)->find($request['vehicle_id']);
            return response()->json([
                'status' => true,
                'contact_details' => $contacts,
                'message' => "Vehicles Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Vehicles",
            ]);
        }
    }


    // Search Vehicle Detail

    public function searchVehicleDetail(Request $request)
    {
        try {
            $validator = \Validator::make($request->all(), [
                'search' =>  ['required', 'string', 'max:255'],



            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }

            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $contacts = Vehicle::with(['vehicle_make', 'vehicle_model', 'engine_size', 'transmission_type', 'fuel_type', 'color', 'contact'])->with('jobs','quotes','bookings')->withCount('quotes')->withCount('bookings')->withCount('jobs')->where('vrm', 'Like', '%' . request('search') . '%')->orWhere('vin_number', 'Like', '%' . request('search') . '%')
                ->where('vender_id', $vender_id)->get();
            return response()->json([
                'status' => true,
                'contact_details' => $contacts,
                'message' => "Vehicles Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Vehicles",
            ]);
        }
    }

    //  Update Vehicle Detail

    public function updateVehicleDetail(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'vrm' =>  ['required', 'string', 'max:255'],
                'vehicle_make_id' => 'required',
                 'vehicle_model_id' => 'required',



            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }
            $exists=Vehicle::where('vrm',$request['vrm'])->where('vehicle_make_id',$request['vehicle_make_id'])->where('vehicle_model_id',$request['vehicle_model_id'])->where('id','!=',$request['id'])->first();

            if($exists){
                $responseArr['message'] = "Duplicate Vrm for Vehicle make and Model";
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $year=$request['year'];
            if($request['year']=="" || $request['year']==null || $request['year']==" "){
                $year=' ';
            }

             Vehicle::find($request['id'])->update([
                "vender_id" => $vender_id,
                'type'=>"Vender",
                'year'=>$year,
                ...$request->except('year'),
            ]);


            $vehicles = Vehicle::with(['vehicle_make', 'vehicle_model', 'engine_size', 'transmission_type', 'fuel_type', 'color', 'contact'])->with('jobs','quotes','bookings')->withCount('quotes')->withCount('bookings')->withCount('jobs')->where('vender_id', $vender_id)->find($request['id']);

            return response()->json([
                'status' => true,
                'contact_detail' => $vehicles,
                'message' => "Vehicle Update Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function vehicleConnect(Request $request)
    {
        try {
            $validator = \Validator::make($request->all(), [
                'vehicle_id' =>  ['required'],
                'contact_id' =>  ['required'],



            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }

            Vehicle::find($request['vehicle_id'])->update([
                'contact_id'=>$request['contact_id']

            ]);
            $contact=ContactDetail::with('vehicles','quotes','bookings', 'vehicles.vehicle_make')->withCount('quotes')->withCount('bookings')->withCount('jobs')->orderBy('id','desc')->find($request['contact_id']);
            $vehicles=Vehicle::with(['vehicle_make', 'vehicle_model', 'engine_size', 'transmission_type', 'fuel_type', 'color', 'contact'])->with('jobs','quotes','bookings')->withCount('quotes')->withCount('bookings')->withCount('jobs')->find($request['vehicle_id']);
            return response()->json([
                'status' => true,
                'contact'=>$contact,
                'vehicle'=>$vehicles,
                'message' => "Contact Connect Successfully",
            ]);


        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Vehicles",
            ]);
        }
    }
    public function vehicleDisConnect(Request $request)
    {
        try {
            $validator = \Validator::make($request->all(), [
                'vehicle_id' =>  ['required'],
                'contact_id' =>  ['required'],



            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }

            Vehicle::find($request['vehicle_id'])->update([
                'contact_id'=>null

            ]);

            return response()->json([
                'status' => true,
                'message' => "Contact Dis Connect Successfully",
            ]);


        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Vehicles",
            ]);
        }
    }

    public function vehicleDelete(Request $request)
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

            $quote=Quotation::where('vehicle_id',$request['id'])->count();
            $booking=Booking::where('vehicle_id',$request['id'])->count();
            // $vehicle=Vehicle::where('contact_id',$request['id'])->count();

            if($quote>0){

                return response()->json([
                    'status' => false,

                    'message' => "Vehicle Linked with Quotation First Delete Prerequisites First",
                ]);

            }
            if($booking>0){

                return response()->json([
                    'status' => false,

                    'message' => "Vehicle Linked with Booking First Delete Prerequisites First",
                ]);

            }



            $contact = Vehicle::find($request['id']);
            if (isset($contact)) {
                $contact->delete();
            }




            return response()->json([
                'status' => true,

                'message' => "Vehicle Delete Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Delete Contact",
            ]);
        }
    }
}
