<?php

namespace Modules\Vender\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Modules\Vender\Entities\TradingName;
use Illuminate\Contracts\Support\Renderable;

class TradingUnitController extends Controller
{
    public function tradingName()  {


        $user=auth()->user();




        if(count(TradingName::where('is_change',1)->where('vender_id',$user['id'])->get())==0){
            TradingName::create([
                'vender_id'=>$user['id'],
                'proof'=>$user['profile']['business_proof'],
                'proof_name'=>$user['profile']['business_proof_name'],
                'name'=>$user['profile']['company_name'],
                'status'=>'Active',
                'is_change'=>1
               ]);
        }

        $trading_names=TradingName::where('vender_id',$user['id'])->orderBy('is_change','desc')->get();


        return view('vender::business.trading_name.index',get_defined_vars());

    }
    public function addTradingName()  {


        $user=auth()->user();

        return view('vender::business.trading_name.add',get_defined_vars());

    }

    public function tradingNameView($id)  {


        $trading_name=TradingName::find($id);

        return view('vender::business.trading_name.view',get_defined_vars());

    }
    public function tradingNameEdit($id)  {


        $trading_name=TradingName::find($id);

        return view('vender::business.trading_name.edit',get_defined_vars());

    }

    public function storeTradingName (Request $request)  {

        $request->validate([
            'name' => ['required', 'string','max:255','unique:trading_names'],
        ]);

        $user=auth()->user();
        $filePath=null;
        $fileName=null;;
        if ($request->hasFile('proof')) {
            $file = $request->file('proof');
            $fileName = $file->getClientOriginalName();
            $fileNames = time() . '_' . $file->getClientOriginalName();
            $filePath = $request->file('proof')->move('uploads', $fileNames);

        }
      $trading_name=TradingName::create([
        'vender_id'=>$user['id'],
        'proof'=>$filePath,
        'proof_name'=>$fileName,
        'name'=>$request['name'],
        'status'=>'Pending',
       ]);

       return  redirect()->route('vender.trading.name');

    }

    public function updateTradingName(Request $request)  {


        $request->validate([
            'name' => 'required|unique:trading_names,name,' . $request->id,
        ]);

        $user=auth()->user();
        $name=TradingName::find($request['id']);
        $filePath=$name['proof'];
        $fileName=$name['proof_name'];
        if ($request->hasFile('proof')) {
            $file = $request->file('proof');
            $fileName = $file->getClientOriginalName();
            $fileNames = time() . '_' . $file->getClientOriginalName();
            $filePath = $request->file('proof')->move('uploads', $fileNames);

        }
      $trading_name=TradingName::find($request['id'])->update([
        'vender_id'=>$user['id'],
        'proof'=>$filePath,
        'proof_name'=>$fileName,
        'name'=>$request['name'],
       ]);

       return  redirect()->route('vender.trading.name');

    }
}
