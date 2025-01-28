<?php

namespace Modules\Vender\Http\Controllers\Api;

use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Vender\Entities\Quotation;
use Modules\Vender\Entities\QuotationItem;
use Modules\Vender\Entities\QuotationJobItemJobType;

class QuotationItemController extends Controller
{


    /**************** save QuotationItem *********************/

    public function saveQuotationItem(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'quotation_id' =>  ['required'],
                'job_type_id' =>  ['required'],
                'price_type_id' =>  ['required'],
               // 'job_description' =>  ['required'],
                'product' =>  ['required'],
                'unit_price' =>  ['required'],
                'qty' =>  ['required'],
                'discount' =>  ['required'],
                'vat_rate' =>  ['required'],
                'vat_price' =>  ['required'],
                'total_price' =>  ['required'],
                'sub_total_ex_vat' =>  ['required'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;

            $latestOrder = QuotationItem::orderBy('created_at', 'DESC')->first();

            $obj = QuotationItem::create([
                "vender_id" => $vender_id,
                "job_item_no" => 'JIT-'."SVP".str_pad($vender_id, 5, "0", STR_PAD_LEFT)."-". str_pad($latestOrder?$latestOrder->id+1: 0 + 1, 5, "0", STR_PAD_LEFT),
                "job_description"=>'sdb',
                ...$request->except('job_types'),

            ]);
            if(isset($request['job_types'])){
                foreach ($request['job_types'] as $key => $job_type) {

                    QuotationJobItemJobType::create([
                        "job_item_id"=>$obj['id'],
                        "job_type_id"=>$job_type['id'],

                    ]);
                    # code...
                }
            }
              Quotation::find($request['quotation_id'])->update([
                "vender_id" => $vender_id,

                "total" => QuotationItem::where('quotation_id', $request['quotation_id'])->sum('total_price'),
                "sub_total" => QuotationItem::where('quotation_id', $request['quotation_id'])->sum('sub_total_ex_vat'),
                "vat" => QuotationItem::where('quotation_id', $request['quotation_id'])->sum('vat_price'),

            ]);

            $quotation_item = QuotationItem::with(['quotation', 'job_type', 'price_type'])->find($obj->id);

            return response()->json([
                'status' => true,
                'quotation_item' => $quotation_item,
                'message' => "Quotation Item Added Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Add Quotation Item",
            ]);
        }
    }
    /**************** update QuotationItem *********************/

    public function updateQuotationItem(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'quotation_item_id' =>  ['required'],
                'quotation_id' =>  ['required'],
                'job_type_id' =>  ['required'],
                'price_type_id' =>  ['required'],
               // 'job_description' =>  ['required'],
                'product' =>  ['required'],
                'unit_price' =>  ['required'],
                'qty' =>  ['required'],
                'discount' =>  ['required'],
                'vat_rate' =>  ['required'],
                'vat_price' =>  ['required'],
                'total_price' =>  ['required'],
                'sub_total_ex_vat' =>  ['required'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;



            $obj = QuotationItem::find($request['quotation_item_id'])->update([
                "vender_id" => $vender_id,
                  "job_description"=>'sdb',
                ...$request->except('quotation_item_id','job_types'),

            ]);

            Quotation::find($request['quotation_id'])->update([
                "vender_id" => $vender_id,

                "total" => QuotationItem::where('quotation_id', $request['quotation_id'])->sum('total_price'),
                "sub_total" => QuotationItem::where('quotation_id', $request['quotation_id'])->sum('sub_total_ex_vat'),
                "vat" => QuotationItem::where('quotation_id', $request['quotation_id'])->sum('vat_price'),

            ]);
            QuotationJobItemJobType::where('job_item_id',$request['quotation_item_id'])->delete();

            if(isset($request['job_types'])){
                foreach ($request['job_types'] as $key => $job_type) {

                    QuotationJobItemJobType::create([
                        "job_item_id"=>$request['quotation_item_id'],
                        "job_type_id"=>$job_type['id'],

                    ]);
                    # code...
                }
            }

            $quotation_item = QuotationItem::with(['quotation', 'job_type', 'price_type'])->find($request->quotation_item_id);

            return response()->json([
                'status' => true,
                'quotation_item' => $quotation_item,
                'message' => "Quotation Item Update Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Update Quotation Item",
            ]);
        }
    }


    public function getSingleJobRequest(Request $request)
    {
        try {


            $quotation_item = QuotationItem::with([ 'job_type', 'price_type'])->find($request->quotation_item_id);

            if ($quotation_item) {
                return response()->json([
                    'status' => true,
                    '$quotation_item' => $quotation_item,
                    'message' => "QuotationItem Fetch Successfully",
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    '$quotation_item' => $quotation_item,
                    'message' => "QuotationItem Not Found",
                ]);
            }
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Add QuotationItem",
            ]);
        }
    }


    /***********  Delete Job Request    ***************/


    public function deleteJobRequest(Request $request)
    {

        try {


            $quotation_item = QuotationItem::find($request->quotation_item_id);

            if ($quotation_item) {
                Quotation::find($quotation_item['quotation_id'])->update([
                      "total" => 0,
                    "sub_total" => 0,
                    "vat" =>0,

                ]);
                $quotation_item->delete();
                return response()->json([
                    'status' => true,

                    'message' => "QuotationItem Delete Successfully",
                ]);
            } else {
                return response()->json([
                    'status' => false,

                    'message' => "QuotationItem Not Found",
                ]);
            }
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Add QuotationItem",
            ]);
        }
    }

}
