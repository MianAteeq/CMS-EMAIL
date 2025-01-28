<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Packages;
use Modules\Admin\Entities\PackagesFeature;
use Modules\Admin\Entities\Services;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $services=Services::orderBy('id','desc')->paginate(6);
        return view('frontend::index',get_defined_vars());
    }

    public function about()
    {
        return view('frontend::about');
    }

    public function service()
    {
        $services = Services::orderBy('id', 'desc')->get();
        return view('frontend::service',get_defined_vars());
    }
    
    public function pricing()
    {
        $packages = Packages::with('features')->where('status',0)->get();
        return view('frontend::pricing',get_defined_vars());
    }

    public function contact()
    {
        return view('frontend::contact');
    }

    public function sign_in()
    {
        return view('frontend::sign-in');
    }

    public function service_details()
    {
        return view('frontend::service-details');
    }

    public function terms_condition()
    {
        return view('frontend::terms-and-conditions');
    }

    public function privacy_policy()
    {
        return view('frontend::privacy-policy');
    }

    public function sign_up()
    {
        return view('frontend::sign-up');
    }
}
