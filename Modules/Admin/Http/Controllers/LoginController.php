<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin::admin.auth.login');
    }
    public function store(Request $request)
    {
        $user_auth = Auth::guard('admin')
            ->attempt(
                [
                    'email' => $request->email,
                    'password' => $request->password
                ],
                $request->remember
            );
        if ($user_auth) {
            return redirect('admin/dashboard');
        } else {
            $errors = 'Please Enter Valid Email ID or Password.';
            return redirect('/admin/login')->withErrors($errors);
        }
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }
    }

    public function recover()
    {
        return view('admin::admin.auth.forgot_password');
    }

    public function logout(Request $request)
    {
        auth()->guard('admin')->logout();
        return redirect('login');
    }
}
