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

class ContactController extends Controller
{


    //  Save Contact Detail

    public function saveContactDetail(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'name' =>  ['required', 'string', 'max:255'],
                'last_name' => 'required',
                'mobile_no' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                // 'address' => 'required',
                // 'city' => 'required',
                // 'postal_code' => 'required',


            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                $responseArr['status'] = false;
                return response()->json($responseArr);
            }


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;
            $trading_id = User::find($request->user()->id)['default_trading_unit'];


            $exist=ContactDetail::where('vender_id',$vender_id)->where('trading_id',$trading_id)->where('mobile_no',$request['mobile_no'])->count();

            if($exist>0) {

                $responseArr['message'] = 'Contact Already Exist';
                $responseArr['token'] = '';
                $responseArr['status'] = false;
                return response()->json($responseArr);
            }

            $latestOrder = ContactDetail::orderBy('created_at', 'DESC')->first();

            $contact_detail = ContactDetail::create([
                "vender_id" => $vender_id,
                "contact_no"=>'CON-'."SVP".str_pad($vender_id, 5, "0", STR_PAD_LEFT)."-". str_pad($latestOrder?$latestOrder->id+1: 0 + 1, 5, "0", STR_PAD_LEFT),
                'trading_id'=>$trading_id,
                ...$request->all(),
            ]);

            $contacts = ContactDetail::with('vehicles','quotes','bookings', 'vehicles.vehicle_make')->withCount('quotes')->withCount('bookings')->withCount('jobs')->where('vender_id', $vender_id)->orderBy('id','desc')->first();

            return response()->json([
                'status' => true,
                'contact_detail' => $contacts,
                'contact_details' => $contact_detail,
                'message' => "Contact Addeds Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Add Contact",
            ]);
        }
    }

    // Get Contact Detail

    public function getSingleContactDetail(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'contact_id' =>  ['required', 'max:255'],



            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                $responseArr['status'] = false;
                return response()->json($responseArr);
            }

            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $contacts = ContactDetail::with('vehicles','quotes','bookings', 'vehicles.vehicle_make','vehicles.vehicle_model','jobs')->withCount('quotes')->with('jobs.vehicle','jobs.contact_detail','jobs.job_requests','jobs.job_requests.job_types','jobs.job_requests.job_types.job_type')->withCount('bookings')->withCount('jobs')->where('vender_id', $vender_id)->where('contact_no','!=',null)->orderBy('id','desc')->find($request['contact_id']);
            return response()->json([
                'status' => true,
                'contact_detail' => $contacts,
                'message' => "Contact Detail Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Contact",
            ]);
        }
    }
    public function getContactDetail(Request $request)
    {

        try {

            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;
            $trading_id = User::find($request->user()->id)['default_trading_unit'];

            $contacts = ContactDetail::with('vehicles','quotes','bookings', 'vehicles.vehicle_make' )->withCount('quotes')->withCount('bookings')->withCount('jobs')->where('vender_id', $vender_id)->where('trading_id', $trading_id)->where('contact_no','!=',null)->orderBy('id','desc')->paginate(10);
            return response()->json([
                'status' => true,
                'contact_details' => $contacts,
                'message' => "ContactDetail Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Contact",
            ]);
        }
    }

    // Search Contact Detail

    public function searchContactDetail(Request $request)
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

            $contacts = ContactDetail::with('vehicles')->where('name', 'Like', '%' . request('search') . '%')->orWhere('last_name', 'Like', '%' . request('search') . '%')
                ->orWhere('email', 'Like', '%' . request('search') . '%')->orWhere('mobile_no', 'Like', '%' . request('search') . '%')->where('vender_id', $vender_id)->get();
            return response()->json([
                'status' => true,
                'contact_details' => $contacts,
                'message' => "ContactDetail Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Contact",
            ]);
        }
    }

    //  Update Contact Detail

    public function updateContactDetail(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'id' =>  ['required'],
                'name' =>  ['required', 'string', 'max:255'],
                'last_name' => 'required',
                'mobile_no' => 'required|unique:contact_details,mobile_no,' . $request->id,
                'email' => 'required|unique:contact_details,email,' . $request->id,



            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                $responseArr['status'] = false;
                return response()->json($responseArr);
            }


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $exist=ContactDetail::where('vender_id',$vender_id)->where('mobile_no',$request['mobile_no'])->where('id','!=',$request['id'])->count();

            if($exist>0) {

                $responseArr['message'] = 'Contact Already Exist';
                $responseArr['token'] = '';
                $responseArr['status'] = false;
                return response()->json($responseArr);
            }

             ContactDetail::find($request['id'])->update([
                "vender_id" => $vender_id,
                ...$request->all(),
            ]);

            $contacts = ContactDetail::with('vehicles','quotes','bookings', 'vehicles.vehicle_make')->withCount('quotes')->withCount('bookings')->withCount('jobs')->where('vender_id', $vender_id)->find($request['id']);
            return response()->json([
                    'status' => true,
                    'contact_detail' => $contacts,
                    'message' => "ContactDetail Update Successfully",
                ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Update Contact",
            ]);
        }
    }
    //  Delete Contact Detail

    public function contactDelete(Request $request)
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

           $quote=Quotation::where('contact_detail_id',$request['id'])->count();
            $booking=Booking::where('contact_detail_id',$request['id'])->count();
            $vehicle=Vehicle::where('contact_id',$request['id'])->count();

            if($quote>0){

                return response()->json([
                    'status' => false,

                    'message' => "ContactDetail Linked with Quotation First Delete Prerequisites First",
                ]);

            }
            if($booking>0){

                return response()->json([
                    'status' => false,

                    'message' => "ContactDetail Linked with Booking First Delete Prerequisites First",
                ]);

            }
            if($vehicle>0){

                return response()->json([
                    'status' => false,

                    'message' => "ContactDetail Linked with Vehicle First Delete Prerequisites First",
                ]);

            }


            $contact=ContactDetail::find($request['id']);
            if(isset($contact)){
                $contact->delete();

            }




            return response()->json([
                    'status' => true,

                    'message' => "ContactDetail Delete Successfully",
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
