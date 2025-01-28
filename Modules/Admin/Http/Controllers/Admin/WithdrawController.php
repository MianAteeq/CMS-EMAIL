<?php

namespace Modules\Admin\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function index()
    {
        return view('admin::admin.withdraw_request.index');
    }
    public function edit()
    {
        return view('admin::admin.withdraw_request.edit');
    }
    public function view()
    {
        return view('admin::admin.withdraw_request.view');
    }
}
