<?php

namespace Modules\Vender\Http\Controllers;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\JobType;
use Modules\Admin\Entities\PriceType;
use Modules\Admin\Entities\WarrantyJob;
use Modules\Vender\Entities\TradingUnit;
use Modules\Admin\Entities\PaymentMethod;
use Modules\Vender\Entities\QuickProduct;
use Illuminate\Contracts\Support\Renderable;
use Modules\Admin\Entities\VehicleSpecialist;
use Modules\Admin\Entities\AccreditationScheme;
use Modules\Vender\Entities\TradingUnitJobType;
use Modules\Vender\Entities\QuickProductJobType;
use Modules\Vender\Entities\TradingUnitHubProfile;
use Modules\Vender\Entities\TradingUnitWarrentyJob;
use Modules\Vender\Entities\TradingUnitPaymentMethod;
use Modules\Vender\Entities\TradingUnitVehicleSpecialist;
use Modules\Vender\Entities\TradingUnitAccreditationScheme;

class ServiceProviderHubSettingController extends Controller
{
    public function onlineStatus($id) {


        $user=auth()->user();
        $is_hub="on";
        $is_advertise="off";


        if(isset($user->profile->package)){

           $package_name=$user->profile->package['name'];

           if($package_name=="MINI"){
               $is_hub="off";
           }
           if($package_name=="HATCHBACK"){
               $is_hub="on";
               $is_advertise="on";
           }
           if($package_name=="Advertise only"){
               $is_hub="on";
               $is_advertise="on";

           }

        }


        $trading_unit=TradingUnit::find($id);



        return view('vender::service_provider.trading_unit.hub_setting.edit_online_status',get_defined_vars());

    }
    public function jobTypes($id) {


        $user=auth()->user();


        $trading_unit=TradingUnit::find($id);

        $job_types=JobType::all()->groupBy('parent_id');



        return view('vender::service_provider.trading_unit.hub_setting.job_types',get_defined_vars());

    }
    public function warrantyJob($id) {


        $user=auth()->user();


        $trading_unit=TradingUnit::find($id);

        $job_types=WarrantyJob::all();



        return view('vender::service_provider.trading_unit.hub_setting.warrenty_job',get_defined_vars());

    }

    public function warrantyJobSubmit(Request $request) {


        // return $request;


        TradingUnitWarrentyJob::where('trading_id',$request['id'])->delete();
        foreach ($request['warrenty_id'] as $key => $warranty_id) {
            TradingUnitWarrentyJob::create([
                'trading_id'=>$request['id'],
                'warranty_id'=>$warranty_id
            ]);
        }

        return  redirect()->route('vender.service.provider.trading.unit.hub.setting',$request['id']);

    }
    public function vehicleSpecialist($id) {


        $user=auth()->user();


        $trading_unit=TradingUnit::find($id);

        $job_types=VehicleSpecialist::all();



        return view('vender::service_provider.trading_unit.hub_setting.vehicle_specalist',get_defined_vars());

    }

    public function vehicleSpecialistSubmit(Request $request) {


        // return $request;


        TradingUnitVehicleSpecialist::where('trading_id',$request['id'])->delete();
        foreach ($request['warrenty_id'] as $key => $warranty_id) {
            TradingUnitVehicleSpecialist::create([
                'trading_id'=>$request['id'],
                'vehicle_specialist_id'=>$warranty_id
            ]);
        }

        return  redirect()->route('vender.service.provider.trading.unit.hub.setting',$request['id']);

    }
    public function accreditationSubmit(Request $request) {


        // return $request;


        TradingUnitAccreditationScheme::where('trading_id',$request['id'])->delete();
        foreach ($request['warrenty_id'] as $key => $warranty_id) {
            TradingUnitAccreditationScheme::create([
                'trading_id'=>$request['id'],
                'accreditation_scheme_id'=>$warranty_id
            ]);
        }

        return  redirect()->route('vender.service.provider.trading.unit.hub.setting',$request['id']);

    }
    public function accreditation($id) {


        $user=auth()->user();


        $trading_unit=TradingUnit::find($id);

        $job_types=AccreditationScheme::all();



        return view('vender::service_provider.trading_unit.hub_setting.accreditation',get_defined_vars());

    }
    public function productOffer($id) {


        $user=auth()->user();


        $trading_unit=TradingUnit::find($id);

        $job_types=PaymentMethod::all();

        $services=JobType::all();
        $price_types=PriceType::all();



        return view('vender::service_provider.trading_unit.hub_setting.products.add',get_defined_vars());

    }
    public function editProductOffer($id,$trading_id) {


        $user=auth()->user();

      $product=QuickProduct::find($id);


        $trading_unit=TradingUnit::find($trading_id);

        $job_types=PaymentMethod::all();

        $services=JobType::all();
        $price_types=PriceType::all();



        return view('vender::service_provider.trading_unit.hub_setting.products.edit',get_defined_vars());

    }
    public function paymentMethod($id) {


        $user=auth()->user();


        $trading_unit=TradingUnit::find($id);

        $job_types=PaymentMethod::all();



        return view('vender::service_provider.trading_unit.hub_setting.payment_methhod',get_defined_vars());

    }

    public function paymentMethodSubmit(Request $request) {


        // return $request;


        TradingUnitPaymentMethod::where('trading_id',$request['id'])->delete();
        foreach ($request['warrenty_id'] as $key => $warranty_id) {
            TradingUnitPaymentMethod::create([
                'trading_id'=>$request['id'],
                'payment_method_id'=>$warranty_id
            ]);
        }

        return  redirect()->route('vender.service.provider.trading.unit.hub.setting',$request['id']);

    }
    public function addProductOffer(Request $request) {



        $request->validate(
            [
                'product_name' => ['required', 'string', 'max:255'],
                'price' => ['required', 'numeric'],
                // 'job_type_id' => 'required',
                'job_coverage_id' => 'required',

            ]
        );

        $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;
        $latestOrder = QuickProduct::orderBy('created_at', 'DESC')->first();

       $obj=QuickProduct::create([
            "vender_id" => $vender_id,
            "trading_id" => $request['id'],
            "product_no" => 'PRD-'."SVP".str_pad($vender_id, 5, "0", STR_PAD_LEFT)."-". str_pad($latestOrder?$latestOrder->id+1: 0 + 1, 5, "0", STR_PAD_LEFT),
            "job_type_id" => count($request->service_id)>0?$request->service_id[0]:0,
            "job_coverage_id" => $request->job_coverage_id,
            "product_name" => $request->product_name,
            "description" => $request->description,
            "price_type" => $request->price_type,
            "term_condition" => $request->term_condition,
            "price" => $request->price,


        ]);

        if (isset($request->service_id)) {

            foreach ($request->service_id as $key => $job_id) {
                QuickProductJobType::create([
                    "quick_product_id"=>$obj['id'],
                    "job_type_id"=>$job_id,

                ]);
            }

            # code...
        }




        return  redirect()->route('vender.service.provider.trading.unit.hub.setting',$request['id']);

    }
    public function updateProductOffer(Request $request) {



        $request->validate(
            [
                'product_name' => ['required', 'string', 'max:255'],
                'price' => ['required', 'numeric'],
                // 'job_type_id' => 'required',
                'job_coverage_id' => 'required',

            ]
        );

        $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;
        $latestOrder = QuickProduct::orderBy('created_at', 'DESC')->first();

       $obj=QuickProduct::find($request['id'])->update([

            "job_type_id" => count($request->service_id)>0?$request->service_id[0]:0,
            "job_coverage_id" => $request->job_coverage_id,
            "product_name" => $request->product_name,
            "description" => $request->description,
            "price_type" => $request->price_type,
            "term_condition" => $request->term_condition,
            "price" => $request->price,


        ]);

        if (isset($request->service_id)) {
            QuickProductJobType::where('quick_product_id',$request['id'])->delete();

            foreach ($request->service_id as $key => $job_id) {
                QuickProductJobType::create([
                    "quick_product_id"=>$request['id'],
                    "job_type_id"=>$job_id,

                ]);
            }

            # code...
        }




        return  redirect()->route('vender.service.provider.trading.unit.hub.setting',QuickProduct::find($request['id'])['trading_id']);

    }

    public function jobTypesSubmit(Request $request) {


        TradingUnitJobType::where('trading_id',$request['id'])->delete();
        foreach ($request['job_type_id'] as $key => $job_type_id) {
            TradingUnitJobType::create([
                'trading_id'=>$request['id'],
                'job_type_id'=>$job_type_id
            ]);
        }

        return  redirect()->route('vender.service.provider.trading.unit.hub.setting',$request['id']);

    }

    public function socialMedia($id) {


        $user=auth()->user();


        $trading_unit=TradingUnit::find($id);

        $hub_setting=TradingUnitHubProfile::where('trading_id',$id)->first();

        if(!isset($hub_setting)){
            TradingUnitHubProfile::create([
                'trading_id'=>$id
            ]);
        }



        return view('vender::service_provider.trading_unit.hub_setting.social_media',get_defined_vars());

    }

    public function openingHour($id) {


        $user=auth()->user();


        $trading_unit=TradingUnit::find($id);
        $startPeriod = Carbon::parse('9:00');
        $endPeriod = Carbon::parse('18:00');
        $period = CarbonPeriod::create($startPeriod, '15 minutes', $endPeriod );

        $hours  = [];

        foreach ($period as $date) {
            $hours[] = $date->format('h:i A');
        }



        return view('vender::service_provider.trading_unit.hub_setting.edit_opening_hour',get_defined_vars());

    }

    public function openingHourSubmit(Request $request) {



        $hub_setting=TradingUnitHubProfile::where('trading_id',$request['id'])->first();

        if(isset($hub_setting)){

            TradingUnitHubProfile::find($hub_setting['id'])->update([

                'trading_id'=>$request['id'],
                'is_monday'=>$request['is_monday']?1:0,
                'is_tuesday'=>$request['is_tuesday']?1:0,
                'is_wednesday'=>$request['is_wednesday']?1:0,
                'is_thursday'=>$request['is_thursday']?1:0,
                'is_friday'=>$request['is_friday']?1:0,
                'is_saturday'=>$request['is_saturday']?1:0,
                'is_sunday'=>$request['is_sunday']?1:0,
                ...$request->except('id','_token')

            ]);
        }else{

            TradingUnitHubProfile::create([

                'trading_id'=>$request['id'],
                'is_monday'=>$request['is_monday']?1:0,
                'is_tuesday'=>$request['is_tuesday']?1:0,
                'is_wednesday'=>$request['is_wednesday']?1:0,
                'is_thursday'=>$request['is_thursday']?1:0,
                'is_friday'=>$request['is_friday']?1:0,
                'is_saturday'=>$request['is_saturday']?1:0,
                'is_sunday'=>$request['is_sunday']?1:0,
                ...$request->except('id','_token')

            ]);
        }



        return  redirect()->route('vender.service.provider.trading.unit.hub.setting',$request['id']);

    }
    public function socialMediaSubmit(Request $request) {



        $hub_setting=TradingUnitHubProfile::where('trading_id',$request['id'])->first();

        if(isset($hub_setting)){

            TradingUnitHubProfile::find($hub_setting['id'])->update([

                'trading_id'=>$request['id'],

                ...$request->except('id','_token')

            ]);
        }else{

            TradingUnitHubProfile::create([

                'trading_id'=>$request['id'],

                ...$request->except('id','_token')

            ]);
        }



        return  redirect()->route('vender.service.provider.trading.unit.hub.setting',$request['id']);

    }

    public function onlineStatusSubmit(Request $request) {

        $hub_setting=TradingUnitHubProfile::where('trading_id',$request['id'])->first();

        if(isset($hub_setting)){

            TradingUnitHubProfile::find($hub_setting['id'])->update([

                'trading_id'=>$request['id'],
                'is_marketplace'=>$request['is_marketplace']?1:0,
                'is_quote'=>$request['is_quote']?1:0,
                'is_booking'=>$request['is_booking']?1:0,

            ]);
        }else{

            TradingUnitHubProfile::create([

                'trading_id'=>$request['id'],
                'is_marketplace'=>$request['is_marketplace']?1:0,
                'is_quote'=>$request['is_quote']?1:0,
                'is_booking'=>$request['is_booking']?1:0,

            ]);
        }



        return  redirect()->route('vender.service.provider.trading.unit.hub.setting',$request['id']);

    }
}
