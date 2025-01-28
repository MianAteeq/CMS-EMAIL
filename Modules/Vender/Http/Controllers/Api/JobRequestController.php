<?php

namespace Modules\Vender\Http\Controllers\Api;

use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Modules\Vender\Entities\JobRequest;
use Illuminate\Support\Str;
use File;
use Modules\Admin\Entities\JobType;
use Modules\Vender\Entities\QuotationJobRequestJobType;

class JobRequestController extends Controller
{
    /***********  Save Job Request    ***************/

    public function saveJobRequest(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'quotation_id' =>  ['required'],
                'job_type_id' =>  ['required'],
                'price_type_id' =>  ['required'],
                'job_description' =>  ['required'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;
            $latestOrder = JobRequest::orderBy('created_at', 'DESC')->first();

            $file = null;
            if ($request->image) {

                $img = $request->image;
                $folderPath = "quotation/";

                if (!File::exists($folderPath)) {
                    File::makeDirectory($folderPath, $mode = 0777, true, true);
                }

                $image_parts = explode(";base64,", $img);
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);
                $uniqid = uniqid();
                $file = $folderPath . $uniqid . '.' . $image_type;
                file_put_contents($file, $image_base64);


            }

            $obj = JobRequest::create([
                "vender_id" => $vender_id,
                "image" => $file,
                "job_request_id" => 'JRQ-'."SVP".str_pad($vender_id, 5, "0", STR_PAD_LEFT)."-". str_pad($latestOrder?$latestOrder->id+1: 0 + 1, 5, "0", STR_PAD_LEFT),
                "quotation_id"=>$request->quotation_id,
                "product_id"=>$request->product_id??null,
                "job_type_id"=>$request->job_type_id,
                "price_type_id"=>$request->price_type_id,
                "job_description"=>$request->job_description,
                "note"=>$request->note,
                "name"=>JobType::find($request->job_type_id)['name']??'',

            ]);


            if(isset($request['job_types'])){
                foreach ($request['job_types'] as $key => $job_type) {

                    QuotationJobRequestJobType::create([
                        "job_request_id"=>$obj['id'],
                        "job_type_id"=>$job_type['id'],

                    ]);
                    # code...
                }
            }


            $job_request = JobRequest::with(['quotation','job_type','price_type','job_types','job_types.job_type'])->find($obj->id);

            return response()->json([
                'status' => true,
                'job_request' => $job_request,
                'message' => "Job Request Added Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => $e->getMessage(),
            ]);
        }
    }
    /***********  Update Job Request    ***************/

    public function updateJobRequest(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'quotation_id' =>  ['required'],
                'job_type_id' =>  ['required'],
                'price_type_id' =>  ['required'],
                'job_description' =>  ['required'],
                'job_request_id' =>  ['required'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;


            $file = JobRequest::find($request['job_request_id'])['image'];
            if ($request->image) {

                $img = $request->image;
                $folderPath = "quotation/";

                if (!File::exists($folderPath)) {
                    File::makeDirectory($folderPath, $mode = 0777, true, true);
                }

                $image_parts = explode(";base64,", $img);
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);
                $uniqid = uniqid();
                $file = $folderPath . $uniqid . '.' . $image_type;
                file_put_contents($file, $image_base64);


             }

             JobRequest::find($request['job_request_id'])->update([
                "vender_id" => $vender_id,
                "image" => str_replace("https://linkmoto.co.uk/","",$file),
                "quotation_id"=>$request->quotation_id,
                "job_type_id"=>$request->job_type_id,
                "price_type_id"=>$request->price_type_id,
                "job_description"=>$request->job_description,
                "note"=>$request->note,
                "name"=>JobType::find($request->job_type_id)['name']??'',

             ]);

             if(isset($request['job_types'])){
                QuotationJobRequestJobType::where('job_request_id',$request['job_request_id'])->delete();
                foreach ($request['job_types'] as $key => $job_type) {

                    QuotationJobRequestJobType::create([
                        "job_request_id"=>$request['job_request_id'],
                        "job_type_id"=>$job_type['id'],

                    ]);
                    # code...
                }
            }


            $job_request = JobRequest::with(['quotation','job_type','price_type','job_types','job_types.job_type','product'])->find($request->job_request_id);

            // $job_request = JobRequest::with(['quotation','job_type','price_type'])->find($request->job_request_id);

            return response()->json([
                'status' => true,
                'job_request' => $job_request,
                'message' => "Job Request Update Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Update Job Request",
            ]);
        }
    }


    /***********  Delete Job Request    ***************/


    public function deleteJobRequest(Request $request)
    {

        try {


            $job_request = JobRequest::find($request->job_request_id);

            if($job_request){
                $job_request->delete();
                return response()->json([
                    'status' => true,

                    'message' => "Job Request Delete Successfully",
                ]);

            }else{
                return response()->json([
                    'status' => false,

                    'message' => "Job Request Not Found",
                ]);

            }

        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Add Job Request",
            ]);
        }
    }
    /***********  Get Job Request    ***************/


    public function getSingleJobRequest(Request $request)
    {

        try {


            $job_request = JobRequest::with(['job_request', 'job_type', 'price_type'])->find($request->job_request_id);

            if($job_request){
                return response()->json([
                    'status' => true,
                    'job_request' => $job_request,
                    'message' => "Job Request Fetch Successfully",
                ]);

            }else{
                return response()->json([
                    'status' => false,
                    'job_request' => $job_request,
                    'message' => "Job Request Not Found",
                ]);

            }

        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Add Job Request",
            ]);
        }
    }
}
