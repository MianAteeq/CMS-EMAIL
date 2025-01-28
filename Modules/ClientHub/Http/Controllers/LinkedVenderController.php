<?php

namespace Modules\ClientHub\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Vender\Entities\TradingUnit;
use Modules\ClientHub\Entities\LinkVender;
use Illuminate\Contracts\Support\Renderable;

class LinkedVenderController extends Controller
{

    public function linkVender(Request $request)
    {
        $vender_id = $request->vender_id;


        $user = LinkVender::where('vender_id', $vender_id)->where('hub_id',$request->user()->id)->first();

        if(isset($user)){

             $user->delete();

            return response()->json([
                'status' => true,

                'message' => "Service Provider Unlink Successfully",
            ]);

        }
        else{

            $user=new LinkVender();
            $user->vender_id=$vender_id;
            $user->hub_id= $request->user()->id;
            $user->save();

            return response()->json([
                'status' => true,
                'profile' => $user,
                'message' => "Service Provider link Successfully",
            ]);

        }



    }

    public function fetchLinkVender(Request $request)
    {

        try {
            $user = LinkVender::where('hub_id', $request->user()->id)->pluck('vender_id');



            $services = TradingUnit::where('status','ACTIVE')->whereIn('id',$user)->with('vender')->whereHas("hub_setting",function($q) {
                $q->where("is_marketplace",1);
            })->with(['hub_setting','trading_name','job_types.job_type','payment_methods.payment_method','product_offers','vehicle_specialists.vehicle_specialist','accreditations.accreditation','warranty_jobs.warranty_job'])->get();
            return response()->json([
                'status' => true,
                'services' => $services,
                'message' => "Services Provider Fetch Successfully",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
                'message' => "Error while getting Services Provider",
            ]);
        }
    }
}
