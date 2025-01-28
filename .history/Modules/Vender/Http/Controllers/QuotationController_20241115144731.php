<?php

namespace Modules\Vender\Http\Controllers;

use stdClass;
use Exception;
use Carbon\Carbon;
use App\Models\Log;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Modules\Vender\Entities\Booking;
use Modules\Vender\Entities\Vehicle;
use Modules\ClientHub\Entities\Client;
use Modules\Vender\Entities\Quotation;
use Modules\Vender\Entities\ContactDetail;
use Modules\Vender\Entities\QuotationItem;
use Illuminate\Contracts\Support\Renderable;
use Kutia\Larafirebase\Facades\Larafirebase;
use Modules\Vender\Entities\CustomNotification;

class QuotationController extends Controller
{

    /***********  Save Quotation    ***************/

    public function saveQuotation(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'vehicle_id' =>  ['required'],
                'contact_detail_id' =>  ['required'],
                'service_id' =>  ['required'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;
            $trading_id = User::find($request->user()->id)['default_trading_unit'];
            $latestOrder = Quotation::orderBy('created_at', 'DESC')->first();

            $obj = Quotation::create([
                "vender_id" => $vender_id,
                'trading_id'=>$trading_id,
                "quotation_no" => 'QTE-'."SVP".str_pad($vender_id, 5, "0", STR_PAD_LEFT)."-". str_pad($latestOrder?$latestOrder->id+1: 0 + 1, 5, "0", STR_PAD_LEFT),
                ...$request->all(),
            ]);

            $quotation = Quotation::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail', 'contact_detail.hub','service', 'job_requests', 'quotation_item','job_requests.job_types','job_requests.job_types.job_type'
            ])->find($obj->id);

            $latestOrder = Log::orderBy('created_at', 'DESC')->first();
            $data=new stdClass();
            $data->user_id=$vender_id;
            $data->log_no = 'LOG-'."SVP".str_pad($vender_id, 5, "0", STR_PAD_LEFT)."-". str_pad($latestOrder?$latestOrder->id+1: 0 + 1, 5, "0", STR_PAD_LEFT);
            $data->type="Quote";
            $data->event="Quote Create";
            $data->event_detail="Quote Creating ";
            $data->type_id =$obj['id'];

            Log::saveLog($data);

            return response()->json([
                'status' => true,
                'quotation' => $quotation,
                'message' => "Quotation Added Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => $e->getMessage(),
            ]);
        }
    }
    public function saveBooking(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'vehicle_id' =>  ['required'],
                'contact_detail_id' =>  ['required'],
                'service_id' =>  ['required'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;
            $trading_id = User::find($request->user()->id)['default_trading_unit'];
            $latestOrder = Booking::orderBy('created_at', 'DESC')->first();

            $obj = Booking::create([
                "vender_id" => $vender_id,
                'trading_id'=>$trading_id,
                "booking_no" =>'BKG-'."SVP".str_pad($vender_id, 5, "0", STR_PAD_LEFT)."-". str_pad($latestOrder?$latestOrder->id+1: 0 + 1, 5, "0", STR_PAD_LEFT),
                'booking_date'=>date('Y-m-d', strtotime($request->booking_date)),
                ...$request->except('booking_date'),
            ]);

            $latestOrder = Log::orderBy('created_at', 'DESC')->first();
            $data = new stdClass();
            $data->user_id = $vender_id;
            $data->log_no = 'lOG-' . "SVP" . str_pad($vender_id, 5, "0", STR_PAD_LEFT) . "-" . str_pad($latestOrder ? $latestOrder->id + 1 : 0 + 1, 5, "0", STR_PAD_LEFT);
            $data->type = "Book";
            $data->event = "Booking Create";
            $data->event_detail = "Booking Creating ";
            $data->type_id = $obj['id'];

            Log::saveLog($data);

            $quotation = Booking::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail','contact_detail.hub', 'service', 'job_requests', 'booking_items'
            ])->find($obj->id);

            return response()->json([
                'status' => true,
                'booking' => $quotation,
                'message' => "Booking Added Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Add Booking",
            ]);
        }
    }
    /***********  Save QuotationDraft    ***************/

    public function saveQuotationDraft(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'quotation_id' =>  ['required'],
                'vehicle_id' =>  ['required'],
                'contact_detail_id' =>  ['required'],
                'service_id' =>  ['required'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;
            $trading_id = User::find($request->user()->id)['default_trading_unit'];


           Quotation::find($request['quotation_id'])->update([
                "vender_id" => $vender_id,
                "status"=> 'DRAFT',
                "total" => QuotationItem::where('quotation_id', $request['quotation_id'])->sum('total_price'),
                "sub_total" => QuotationItem::where('quotation_id', $request['quotation_id'])->sum('sub_total_ex_vat'),
                "vat" => QuotationItem::where('quotation_id', $request['quotation_id'])->sum('vat_price'),
                ...$request->except('quotation_id'),
            ]);

            Vehicle::find($request['vehicle_id'])->update([
                'contact_id'=>$request['contact_detail_id']
            ]);

            $quotation = Quotation::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail','contact_detail.hub', 'service', 'job_requests', 'quotation_item','job_requests.job_types','job_requests.job_types.job_type'
            ])->find($request->quotation_id);



            return response()->json([
                'status' => true,
                'quotation' => $quotation,
                'message' => "Quotation save to Draft Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Save Quotation to Draft",
            ]);
        }
    }

    /***********  Get Quotation    ***************/

    public function getQuotationDetail(Request $request)
    {

        try {


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;
            $trading_id = User::find($request->user()->id)['default_trading_unit'];

            $quotations = Quotation::with(['vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
             'contact_detail','contact_detail.hub','hub_contact', 'service', 'job_requests', 'quotation_item','job_requests.job_types','job_requests.job_types.job_type','quotation_item.job_types','quotation_item.job_types.job_type','job_requests.price_type','quotation_item.price_type','job_logs','job_logs.user'])
             ->where('vender_id', $vender_id)->where('trading_id', $trading_id)->where('is_hub',0)->orderBy('id', 'desc')->paginate(100);
            // $quotation_s = Quotation::with(['vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
            //  'contact_detail','contact_detail.hub','hub_contact', 'service', 'job_requests', 'quotation_item','job_requests.job_types','job_requests.job_types.job_type','quotation_item.job_types','quotation_item.job_types.job_type','job_requests.price_type','quotation_item.price_type','job_logs','job_logs.user'])
            //  ->where('vender_id', $vender_id)->where('status','!=','DRAFT')->where('is_hub',1)->orderBy('id', 'desc')->paginate(10);

             $quotes=$quotations;

             $todo_quotations=Quotation::where('vender_id', $vender_id)->where('trading_id', $trading_id)->whereIn('status',['DRAFT','REQUEST_FOR_PRICE','BEING_PREPARED'])->count();
             $pending_quotations=Quotation::where('vender_id', $vender_id)->where('trading_id', $trading_id)->whereIn('status',['PRICED','REQUEST_FOR_INFO','REQUEST_FOR_AMENDMENT'])->count();
            return response()->json([
                'status' => true,
                'quotations' => $quotes,
                'todo_quotations' => $todo_quotations,
                'pending_quotations' => $pending_quotations,
                'message' => "Quotation Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Quotation",
            ]);
        }
    }
    /***********  Get Single Quotation    ***************/

    public function getSingleQuotation(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'id' =>  ['required'],


            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $quotations = Quotation::with([
                'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
                'contact_detail','contact_detail.hub','hub_contact', 'service', 'job_requests.job_type', 'job_requests.price_type', 'job_requests.product', 'quotation_item','quotation_item.job_type','quotation_item.quotation',
                'quotation_item.price_type','job_requests.job_types','job_requests.job_types.job_type','quotation_item.job_types','quotation_item.job_types.job_type','job_logs','job_logs.user'
            ])->where('vender_id', $vender_id)->find($request['id']);

            if($quotations==null){
                return response()->json([
                    'status' => false,
                    'quotation' => $quotations,
                    'message' => "Quotation Not Exist",
                ]);

            }

            return response()->json([
                'status' => true,
                'quotation' => $quotations,
                'message' => "Quotation Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Quotation",
            ]);
        }
    }

    /***********  Save QuotationDraft    ***************/

    public function confirmQuotation(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'quotation_id' =>  ['required'],
                'vehicle_id' =>  ['required'],
                'contact_detail_id' =>  ['required'],
                'service_id' =>  ['required'],
                'quotation_date'=> ['required','date'],
                'price_type'=> ['required'],
                'quote_valid'=> ['required'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;


            Quotation::find($request['quotation_id'])->update([
                "vender_id" => $vender_id,
                "status" => 'PRICED',
                "total" => QuotationItem::where('quotation_id', $request['quotation_id'])->sum('total_price'),
                "sub_total" => QuotationItem::where('quotation_id', $request['quotation_id'])->sum('sub_total_ex_vat'),
                "vat" => QuotationItem::where('quotation_id', $request['quotation_id'])->sum('vat_price'),
                ...$request->except('quotation_id','token'),
            ]);

            Vehicle::find($request['vehicle_id'])->update([
                'contact_id' => $request['contact_detail_id']
            ]);

            $quotation = Quotation::with(['contact_detail', 'service', 'job_requests', 'quotation_item','job_requests.job_types','job_requests.job_types.job_type'])->with('vehicle.vehicle_make')->with('vehicle.vehicle_model')->find($request->quotation_id);

            Mail::send('email.quotation', get_defined_vars(), function ($send) use ($quotation) {
                $send->to($quotation['contact_detail']['email'])->subject("Quotation");
            });

            $notification = new CustomNotification();
            $notification->vender_id = $request->user()->id;
            $notification->hub_id = $request['contact_detail_id']??0;
            $notification->message = "Your Quotation Confirm Successfully please have a View";
            $notification->save();

            $client=Client::find($request['contact_detail_id']);
            if($client){



           if($client->token){ Larafirebase::fromArray(['title' => 'Quotation Request', 'body' => 'Your Quotation Confirm Successfully please have a View'])->withAdditionalData([
                'vender_id' => $request->user()->id,
                'user_id' => $request['contact_detail_id'] ?? 0,
            ])->sendNotification($client->token);}
            }

            $latestOrder = Log::orderBy('created_at', 'DESC')->first();
            $data=new stdClass();
            $data->user_id=$vender_id;
            $data->log_no = 'LOG-'."SVP".str_pad($vender_id, 5, "0", STR_PAD_LEFT)."-". str_pad($latestOrder?$latestOrder->id+1: 0 + 1, 5, "0", STR_PAD_LEFT);
            $data->type="Quote";
            $data->event="Quote Confirm Successfully";
            $data->event_detail="Quote Confirm ";
            $data->type_id =$request['quotation_id'];

            Log::saveLog($data);



            return response()->json([
                'status' => true,
                'quotation' => $quotation,
                'message' => "Quotation Send Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Send Quotation ",
            ]);
        }
    }


    public function statusQuotation(Request $request)
    {
        try {
            $validator = \Validator::make($request->all(), [
                'quotation_id' =>  ['required'],
                'status' =>  ['required'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }



            $quote=Quotation::find($request['quotation_id']);

            Quotation::find($request['quotation_id'])->update([
                "status" => $request['status'],
                "note" => $request['note']??'',
                "price_type" => $request['price_type']??'',
                "quote_valid" => $request['quote_valid']??'',
            ]);


            $notification = new CustomNotification();
            $notification->vender_id = $request->user()->id;
            $notification->hub_id = $request['contact_detail_id'] ?? 0;
            $notification->message = "Your Quotation Status Change Successfully please have a View";
            $notification->save();

            $client = Client::find(Quotation::find($request['quotation_id'])['contact_detail_id']);
            if ($client) {



               if($client->token){ Larafirebase::fromArray(['title' => 'Quotation Request', 'body' => 'Your Quotation Status Change Successfully please have a View'])->withAdditionalData([
                    'vender_id' => $request->user()->id,
                    'user_id' => $client['id'] ?? 0,
                ])->sendNotification($client->token);}
            }



            $latestOrder = Log::orderBy('created_at', 'DESC')->first();
            $data=new stdClass();
            $data->log_no = 'LOG-'."SVP".str_pad($request->user()->id, 5, "0", STR_PAD_LEFT)."-". str_pad($latestOrder?$latestOrder->id+1: 0 + 1, 5, "0", STR_PAD_LEFT);
            $data->user_id=$request->user()->id;
            $data->type="Quote";
            $data->event="Quote Status Changes " ;
            $data->type_id =$request['quotation_id'];
            if($request['note']!==null){

                $data->event_detail="Quote Status Change from ".str_replace('_', ' ', strtoupper($quote['status'])). " to ".str_replace('_', ' ', strtoupper($request['status'])) ." With Message ".$request['note'];
            }else{
                $data->event_detail="Quote Status Change from ".str_replace('_', ' ', strtoupper($quote['status'])). " to ".str_replace('_', ' ', strtoupper($request['status'])) ;

            }

            Log::saveLog($data);




            return response()->json([
                'status' => true,
                'client' => $client,
                'message' => "Quotation ". $request['status']." Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Status Quotation ",
            ]);
        }
    }

    public function deleteQuotation(Request $request)
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


            $contact = Quotation::find($request['id']);
            if (isset($contact)) {
                $contact->delete();

            }




            return response()->json([
                'status' => true,

                'message' => "Quote Delete Successfully",
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
