<?php

namespace Modules\Vender\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\JobType;
use Modules\Admin\Entities\PriceType;
use Modules\Vender\Entities\QuickProduct;
use File;
use Image;
use Modules\Vender\Entities\QuickProductJobType;

class QuickProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */

    public function __construct()
    {
        $this->middleware('is_vender');
    }

    public function index()
    {
        $product_offers=QuickProduct::orderBy('id','desc')->where('vender_id',auth()->user()->id)->get();
        return  view('vender::product_offer.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {

        $job_types=JobType::all();
        $price_types=PriceType::all();
        return view('vender::product_offer.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'product_name' => ['required', 'string', 'max:255'],
                'price' => ['required', 'numeric'],
                'job_type_id' => 'required',
                'job_coverage_id' => 'required',

            ]
        );
        if ($request->image) {
            $filename = time() . '.' . $request->image->extension();
            $path = public_path('profile/image/');
            $upload_image = $path . $filename;
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }
            $img = Image::make($request->image)->resize(200, 200);
            $img->save($upload_image);

            $image_name = 'profile/image/' . $filename;
        } else {
            $image_name = "";
        }
        $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;
        $latestOrder = QuickProduct::orderBy('created_at', 'DESC')->first();

       $obj=QuickProduct::create([
            "vender_id" => $vender_id,
            "product_no" => 'PRD-'."SVP".str_pad($vender_id, 5, "0", STR_PAD_LEFT)."-". str_pad($latestOrder?$latestOrder->id+1: 0 + 1, 5, "0", STR_PAD_LEFT),
            "job_type_id" => count($request->job_type_id)>0?$request->job_type_id[0]:0,
            "job_coverage_id" => $request->job_coverage_id,
            "product_name" => $request->product_name,
            "description" => $request->description,
            "price_type" => $request->price_type,
            "term_condition" => $request->term_condition,
            "price" => $request->price,
            "image" => $image_name,

        ]);

        if (isset($request->job_type_id)) {

            foreach ($request->job_type_id as $key => $job_id) {
                QuickProductJobType::create([
                    "quick_product_id"=>$obj['id'],
                    "job_type_id"=>$job_id,

                ]);
            }

            # code...
        }


        return redirect()->route('vender.product.offer.index')->with('message', 'QuickProduct Has Been Create Successfully');


      

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('vender::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $product_offer = QuickProduct::find($id);
        $job_types = JobType::all();
        $price_types = PriceType::all();

        return view('vender::product_offer.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request)
    {
        $request->validate(
            [
                'product_name' => ['required', 'string', 'max:255'],
                'price' => ['required', 'numeric'],
                'job_type_id' => 'required',
                'job_coverage_id' => 'required',

            ]
        );
        if ($request->image) {
            $filename = time() . '.' . $request->image->extension();
            $path = public_path('profile/image/');
            $upload_image = $path . $filename;
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }
            $img = Image::make($request->image)->resize(200, 200);
            $img->save($upload_image);

            $image_name = 'profile/image/' . $filename;
        } else {
            $image_name = $request['old_image'];
        }
        $vender_id = $request->user()->vender_id == 0 ? $request->user()->id : $request->user()->vender_id;
       

        QuickProduct::find($request['id'])->update([
            "vender_id" => $vender_id,
            "job_type_id" => count($request->job_type_id)>0?$request->job_type_id[0]:0,
            "job_coverage_id" => $request->job_coverage_id,
            "product_name" => $request->product_name,
            "description" => $request->description,
            "price_type" => $request->price_type,
            "term_condition" => $request->term_condition,
            "price" => $request->price,
            "image" => $image_name,

        ]);

        QuickProductJobType::where('quick_product_id',$request['id'])->delete();
        if (isset($request->job_type_id)) {

            foreach ($request->job_type_id as $key => $job_id) {
                QuickProductJobType::create([
                    "quick_product_id"=>$request['id'],
                    "job_type_id"=>$job_id,

                ]);
            }

            # code...
        }


        return redirect()->route('vender.product.offer.index')->with('message', 'QuickProduct Has Been Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function delete($id)
    {
        QuickProduct::find($id)->delete();


        return redirect()->route('vender.product.offer.index')->with('message', 'QuickProduct Has Been Deleted ');
    }
}
