<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $guards = null)
    {


        // return $next($request);


        switch ($guards) {
            case 'admin':
                if (Auth::guard($guards)->check()) {

                    return redirect()->intended(route('admin.dashboard'));
                }
                break;


            default:
                if (Auth::guard($guards)->check()) {


                    return redirect()->route('vender.index');
                }
                break;
        }


        return $next($request);
    }
}
