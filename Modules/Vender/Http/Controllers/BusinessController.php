<?php

namespace Modules\Vender\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BusinessController extends Controller
{
    public function businessDetail()  {


        $user=auth()->user();




        return view('vender::business.detail',get_defined_vars());

    }

    public function businessInformation()  {


        $user=auth()->user();




        return view('vender::business.business_information',get_defined_vars());

    }

    public function businessVAT()  {


        $user=auth()->user();




        return view('vender::business.vat',get_defined_vars());

    }


}
