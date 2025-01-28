<?php

namespace Modules\ClientHub\Http\Controllers;

use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Vender\Entities\Vehicle;

class VehicleController extends Controller
{
    public function saveVehicleDetail(Request $request)
    {

        // return 1;
        try {
            $validator = \Validator::make($request->all(), [
                'vrm' =>  ['required', 'string', 'max:255'],
                'vin_number' => 'required',



            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $vender_id = $request->user()->id;

            $veh = Vehicle::create([
                "vender_id" => $vender_id,
                ...$request->all(),
            ]);

            $vehicles = Vehicle::with(['vehicle_make', 'vehicle_model', 'engine_size', 'transmission_type', 'fuel_type', 'color', 'contact'])->where('vender_id', $vender_id)->find($veh['id']);
            return response()->json([
                'status' => true,
                'contact_detail' => $vehicles,
                'message' => "Vehicle Added Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Add Contact",
            ]);
        }
    }

    // Get Vehicle Detail

    public function getVehicleDetail(Request $request)
    {

        try {

            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $contacts = Vehicle::with(['vehicle_make', 'vehicle_model', 'engine_size', 'transmission_type', 'fuel_type', 'color', 'contact'])->where('vender_id', $vender_id)->where('type', 'Client')->get();
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

            $contacts = Vehicle::with(['vehicle_make', 'vehicle_model', 'engine_size', 'transmission_type', 'fuel_type', 'color', 'contact'])->where('vrm', 'Like', '%' . request('search') . '%')->orWhere('vin_number', 'Like', '%' . request('search') . '%')
                ->where('vender_id', $vender_id)->where('type', 'Client')->get();
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
                'vin_number' => 'required',
                'id' => 'required',



            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            Vehicle::find($request['id'])->update([
                "vender_id" => $vender_id,
                ...$request->all(),
            ]);


            $vehicles = Vehicle::with(['vehicle_make', 'vehicle_model', 'engine_size', 'transmission_type', 'fuel_type', 'color', 'contact'])->where('vender_id', $vender_id)->where('type', 'Client')->find($request['id']);

            return response()->json([
                'status' => true,
                'contact_detail' => $vehicles,
                'message' => "Vehicle Update Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Update Vehicle",
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
                'contact_id' => $request['contact_id']

            ]);

            return response()->json([
                'status' => true,
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

    public function vehicleDelete(Request $request)
    {
        Vehicle::find($request['vehicle_id'])->delete();


       
        return response()->json([
            'status' => true,
            'message' => "Vehicle Delete Successfully",
        ]);
    }
}
