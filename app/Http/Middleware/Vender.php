<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Vender\Entities\VenderService;

class Vender
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {

            // dd(Auth::user());


            if (Auth::user()->status == "ACCEPTED" && Auth::user()->application_status=='PENDING' ||  Auth::user()->application_status==Null ) {

                if ($request->path() == "vender/profile" || $request->path() == "vender/profile/start" || $request->path() == "vender/profile/business/info" || $request->path() == "vender/profile/trading/name" || str_contains($request->path(), 'vender/profile') ==true) {

                    return $next($request);

                }else{



                    return redirect(route('vender.profiles'));
                }






            }else{
                if ($request->path() == "vender"){

                    return $next($request);
                }

                if(Auth::user()->application_status=='ACCEPTED'){

                    return redirect(route('vender.index'));
                }else{
                    if ($request->path() == "vender/profile"){
                        return $next($request);
                    }
                    return redirect(route('vender.profiles'));
                }
            }



            return $next($request);


    }
    // return $next($request);
        // if (Auth::check()) {



        //     if (Auth::user()->status == "INACTIVE") {

        //         if ($request->path() == "vender/under/review") {

        //             return $next($request);

        //         }else{

        //             return redirect(route('vender.comming_soon'));
        //         }


        //     }
        //     if(Auth::user()->profile['mechanic_docs']==null || Auth::user()->profile['address_proff'] == null){

        //         if ($request->path() == "vender/setting") {

        //             // dd(1);

        //             return $next($request);
        //         }else {



        //             return redirect(route('vender.setting'));
        //         }





        //     }
        //    $services=VenderService::where('vender_id', auth()->user()->id)->get();
        //    if($services->count()==0){
        //     if ($request->path() == "vender/service") {

        //         // dd(1);

        //         return $next($request);
        //     }else {



        //         return redirect(route('vender.service'));
        //     }
        //    }
        //     if(Auth::user()->subscriptions->count()==0){
        //         if ($request->path() == "vender/package" || str_contains(url()->current(), 'vender/checkout') !=false ) {

        //             return $next($request);
        //         }else if(str_contains(url()->current(), 'vender/checkout') != false){
        //             return $next($request);

        //         }
        //          else {


        //             return redirect(route('vender.package.index'));
        //         }

        //     }


        //     return $next($request);

        // } else {



        //     return redirect(route('website.sign-in'));
        // }

    }
}
