<?php

namespace Modules\Admin\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Admin\Entities\Packages;
use Modules\Admin\Entities\PackagesFeature;
use Illuminate\Support\Str;


class PackageController extends Controller
{
    /******  Package View  *********/

    public function packageProducts()
    {
        $packages = Packages::where('status', '!=', 1)->get();

        return view('admin::admin.products.index', get_defined_vars());
    }
    public function index()
    {
        $packages = Packages::where('status', '!=', 1)->get();

        return view('admin::admin.package.index', get_defined_vars());
    }

    /******  Package Create View  *********/

    public function add(Request $request)
    {
        return view('admin::admin.package.add');
    }


    /******  Package Edit View  *********/

    public function edit($id)
    {

        $package=Packages::find($id);
        return view('admin::admin.package.edit',get_defined_vars());
    }

    /******  Package Store *********/


    public function store(Request $request)
    {




        /****** Store PACKAGE IN STRIPE *********/

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        $product = $stripe->products->create([
            'name' => $request->name,
        ]);

        $price = $stripe->prices->create([
            'unit_amount' => $request->price * 100,
            'currency' => 'gbp',
            'recurring' => ['interval' => 'month'],
            'product' => $product->id,
        ]);

        if ($request->commission) {
            $commission = $request->commission;
            $amount_required = '1';
        } else {
            $commission = '0';
            $amount_required = '0';
        }

        /****** Store PACKAGE IN MYSQL DATABASE *********/

        $data = [
            'name' => $request->name,
            'sub_title' => $request->sub_title,
            'price' => $request->price,
            'time' => $request->time,
            'description' => $request->description,
            'is_repair_app' => $request->is_repair_app??0,
            'is_hub' => $request->is_hub??0,
            'commission' => $commission,
            'stripe_package_id' => $product->id,
            'stripe_price_id' => $price->id,
            'amount_required' => $amount_required,
            'random_key' => Str::random(10),
        ];
        $package_id = Packages::insertGetId($data);

        if (!empty($request->feature_name)) {
            foreach ($request->feature_name as $key => $value) {
                $feature_data = [
                    'package_id' => $package_id,
                    'name' => $value,
                    'status' => $request['feature_status'][$key] ?? 0,
                ];
                $response = PackagesFeature::insert($feature_data);
            }
        }

        if ($package_id) {

            return redirect('/admin/packages')->with('success', 'Your Packages has been Inserted.');

        } else {

            return redirect('/admin/packages')->with('error', 'Something Went Wrong');
        }
    }

    /******  Package Update *********/


    public function update(Request $request)
    {


        /****** Update PACKAGE IN STRIPE *********/

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        $product = $stripe->products->update(
            $request['stripe_package_id'],
            [
            'name' => $request->name,
        ]);

        // return $request;

        $price = $stripe->prices->update($request['stripe_price_id'],[
            'active'=>false,
        ]);
        $price = $stripe->prices->create([
            'unit_amount' => $request->price * 100,
            'currency' => 'gbp',
            'recurring' => ['interval' => 'month'],
            'product' => $product->id,
        ]);

        if ($request->commission) {
            $commission = $request->commission;
            $amount_required = '1';
        } else {
            $commission = '0';
            $amount_required = '0';
        }

        /****** Update PACKAGE IN MYSQL DATABASE *********/

        $data = [
            'name' => $request->name,
            'sub_title' => $request->sub_title,
            'price' => $request->price,
            'time' => $request->time,
            'is_repair_app' => $request->is_repair_app??0,
            'is_hub' => $request->is_hub??0,
            'description' => $request->description,
            'commission' => $commission,
            'stripe_package_id' => $product->id,
            'stripe_price_id' => $price->id,
            'amount_required' => $amount_required,
            'random_key' => Str::random(10),
        ];
        $package_id = Packages::find($request['package_id'])->update($data);

         PackagesFeature::where('package_id',$request['package_id'])->delete();

        if (!empty($request->feature_name)) {
            foreach ($request->feature_name as $key => $value) {


                $feature_data = [
                    'package_id' => $request['package_id'],
                    'name' => $value,
                    'status' => $request['feature_status'][$key] ?? 0,
                ];
                $response = PackagesFeature::insert($feature_data);
            }
        }

        if ($package_id) {

            return redirect('/admin/packages')->with('success', 'Your Packages has been Updated.');
        } else {

            return redirect('/admin/packages')->with('error', 'Something Went Wrong');
        }
    }



    /******  Package Delete *********/

    public function destroy($id, Request $request)
    {
        /******  Find Single Package    *********/

        $product_id = Packages::where('id', $id)->first();

        // In Active Package Price

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        $stripe->prices->update(
            $product_id->stripe_price_id,
            ['active' => false]
        );

        $stripe->products->update(
            $product_id->stripe_package_id,
            ['active' => false]
        );


        // Make Package InActive or Delete

        $response = Packages::where('id', $id)->update(['status' => '1']);
        if ($response) {
            return redirect('/admin/packages')->with('success', 'Your Packages has been Deleted.');
        } else {
            return redirect('/admin/packages')->with('error', 'Something Went Wrong');
        }
    }
}
