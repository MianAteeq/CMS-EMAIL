<?php

namespace Modules\ClientHub\Http\Controllers;

use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\JobType;
use Modules\Vender\Entities\Booking;
use Modules\Vender\Entities\BookingJobRequest;
use Modules\Vender\Entities\JobRequest;
use File;
use Modules\Vender\Entities\BookingJobRequestJobType;

class JobRequestController extends Controller
{
    /***********  Save Job Request    ***************/

    public function saveJobRequest(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'booking_id' =>  ['required'],
                'job_type_id' =>  ['required'],
                'price_type_id' =>  ['required'],
                'job_description' =>  ['required'],

            ]);

            if ($validator->fails()) {

                $responseArr['message'] = $validator->errors()->first();
                $responseArr['token'] = '';
                return response()->json($responseArr);
            }


            $latestOrder = BookingJobRequest::orderBy('created_at', 'DESC')->first();

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

            $booking=Booking::find($request['booking_id']);

            $obj = BookingJobRequest::create([
                "vender_id" => $booking['vender_id'],
                "image" => $file,
                "job_request_id" => 'JOB-SVP' . str_pad($latestOrder->id ?? 0 + 1, 5, "0", STR_PAD_LEFT),
                "booking_id" => $request->booking_id,
                "job_type_id" => $request->job_type_id,
                "price_type_id" => $request->price_type_id,
                "job_description" => $request->job_description,
                "name" => JobType::find($request->job_type_id)['name'] ?? '',

            ]);

            if(isset($request['job_types'])){

                foreach ($request['job_types'] as $key => $job_type) {

                    BookingJobRequestJobType::create([
                        "job_request_id"=>$obj['id'],
                        "job_type_id"=>$job_type['id'],

                    ]);
                    # code...
                }
            }

            $job_request = JobRequest::with(['quotation', 'job_type', 'price_type'])->find($obj->id);

            return response()->json([
                'status' => true,
                'job_request' => $job_request,
                'message' => "Job Request Added Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while Add Job Request",
            ]);
        }
    }
     /***********  Update Job Request    ***************/

     public function updateJobRequest(Request $request)
     {

         try {
             $validator = \Validator::make($request->all(), [
                 'booking_id' =>  ['required'],
                 'job_type_id' =>  ['required'],
                 'price_type_id' =>  ['required'],
                 'job_description' =>  ['required'],
                 'job_request_id' =>  ['required'],
                 // 'vender_id' =>  ['required'],

             ]);

             if ($validator->fails()) {

                 $responseArr['message'] = $validator->errors()->first();
                 $responseArr['token'] = '';
                 return response()->json($responseArr);
             }


             $vender_id = Booking::find($request['booking_id'])['vender_id'];


             $file = BookingJobRequest::find($request['job_request_id'])['image'];
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

             BookingJobRequest::find($request['job_request_id'])->update([
                 "vender_id" => $vender_id,
                 "image" => $file,
                 "booking_id" => $request->booking_id,
                 "job_type_id" => $request->job_type_id,
                 "price_type_id" => $request->price_type_id,
                 "job_description" => $request->job_description,
                 "name" => JobType::find($request->job_type_id)['name'] ?? '',

             ]);

             if(isset($request['job_type_id'])){
                BookingJobRequestJobType::where('job_request_id',$request['job_request_id'])->delete();

                foreach ($request['job_types'] as $key => $job_type) {

                    BookingJobRequestJobType::create([
                        "job_request_id"=>$request['job_request_id'],
                        "job_type_id"=>$job_type['id'],

                    ]);
                    # code...
                }
            }

             $job_request = BookingJobRequest::with(['booking', 'job_type', 'price_type'])->find($request->job_request_id);

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


            $job_request = BookingJobRequest::find($request->job_request_id);

            if ($job_request) {
                $job_request->delete();
                return response()->json([
                    'status' => true,

                    'message' => "Job Request Delete Successfully",
                ]);
            } else {
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


            $job_request = BookingJobRequest::with(['job_request', 'job_type', 'price_type'])->find($request->job_request_id);

            if ($job_request) {
                return response()->json([
                    'status' => true,
                    'job_request' => $job_request,
                    'message' => "Job Request Fetch Successfully",
                ]);
            } else {
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
