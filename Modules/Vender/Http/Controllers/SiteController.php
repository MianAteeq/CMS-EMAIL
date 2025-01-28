<?php

namespace Modules\Vender\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Vender\Entities\VenderAddress;
use Illuminate\Contracts\Support\Renderable;

class SiteController extends Controller
{
    public function site ()  {



        $user=auth()->user();

        if(count(VenderAddress::where('is_change',1)->where('vender_id',$user['id'])->get())==0){
            VenderAddress::create([
                'vender_id'=>$user['id'],
                'address_line_1'=>$user['profile']['address_line_1'],
                'address_line_2'=>$user['profile']['address_line_2'],
                'address_line_3'=>$user['profile']['address_line_3'],
                'address_line_4'=>$user['profile']['address_line_4'],
                'city'=>$user['profile']['city'],
                'postcode'=>$user['profile']['postcode'],
                'type'=>'Site',
                'status'=>'Active',
                'lat'=>0,
                'long'=>0,
                'proof'=>Null,
                'proof_name'=>Null,
                'is_change'=>1
            ]);
        }

        $address=VenderAddress::orderBy('is_change','desc')->where('vender_id',$user['id'])->get();


        return view('vender::business.sites.index',get_defined_vars());

    }
    public function addSite  ()  {



        $user=auth()->user();


        return view('vender::business.sites.add',get_defined_vars());

    }
    public function SiteView($id)  {



        $site=VenderAddress::find($id);


        return view('vender::business.sites.view',get_defined_vars());

    }
    public function SiteEdit($id)  {



        $site=VenderAddress::find($id);


        return view('vender::business.sites.edit',get_defined_vars());

    }
    public function storeSite (Request $request) {

        $user=auth()->user();
        $filePath=Null;
        $fileName=Null;
        if ($request->hasFile('proof')) {
            $file = $request->file('proof');
            $fileName = $file->getClientOriginalName();
            $fileNames = time() . '_' . $file->getClientOriginalName();
            $filePath = $request->file('proof')->move('uploads', $fileNames);

        }

        $address = $request['address_line_1'].",". $request['address_line_2'].",". $request['city'].",". $request['postcode'];
        $result = app('geocoder')->geocode($address)->get();
        if(count($result)>0){
            $coordinates = $result[0]->getCoordinates();
            $lat = $coordinates->getLatitude();
            $long = $coordinates->getLongitude();
        }


        VenderAddress::create([
            'vender_id'=>$user['id'],
            'address_line_1'=>$request['address_line_1'],
            'address_line_2'=>$request['address_line_2'],
            'address_line_3'=>$request['address_line_3'],
            'address_line_4'=>$request['address_line_4'],
            'city'=>$request['city'],
            'postcode'=>$request['postcode'],
            'type'=>'Site',
            'status'=>'Pending',
            'lat'=>$lat??0,
            'long'=>$long??0,
            'proof'=>$filePath,
            'proof_name'=>$fileName
        ]);


        return redirect()->route('vender.site');
    }
    public function updateSite(Request $request) {

        $site=VenderAddress::find($request['id']);
        $filePath=$site['proof'];
        $fileName=$site['proof_name'];;
        if ($request->hasFile('proof')) {
            $file = $request->file('proof');
            $fileName = $file->getClientOriginalName();
            $fileNames = time() . '_' . $file->getClientOriginalName();
            $filePath = $request->file('proof')->move('uploads', $fileNames);

        }
        $address = $request['address_line_1'].", ". $request['city'].", United Kingdom ". $request['postcode'];
        // $address ="281 Clare Street, London E2 9HD";
         $result = app('geocoder')->geocode($address)->get();
        if(count($result)>0){
            $coordinates = $result[0]->getCoordinates();
            $lat = $coordinates->getLatitude();
            $long = $coordinates->getLongitude();
        }


        VenderAddress::find($request['id'])->update([

            'address_line_1'=>$request['address_line_1'],
            'address_line_2'=>$request['address_line_2'],
            'address_line_3'=>$request['address_line_3'],
            'address_line_4'=>$request['address_line_4'],
            'city'=>$request['city'],
            'postcode'=>$request['postcode'],
            'type'=>'Site',
            'status'=>'Pending',
            'lat'=>$lat??0,
            'long'=>$long??0,
            'proof'=>$filePath,
            'proof_name'=>$fileName
        ]);


        return redirect()->route('vender.site');
    }
}
