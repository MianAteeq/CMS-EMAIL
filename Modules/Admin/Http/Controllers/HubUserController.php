<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Modules\Vender\Entities\Booking;
use Modules\Vender\Entities\Invoice;
use Modules\Vender\Entities\Vehicle;
use Modules\ClientHub\Entities\Client;
use Modules\Vender\Entities\Quotation;
use Illuminate\Contracts\Support\Renderable;

class HubUserController extends Controller
{
    public function index()
    {
        $clients=Client::orderBy('id','desc')->get();

        return view('admin::admin.hub_user.index',get_defined_vars());
    }

    public function add(Request $request)
    {
        $roles=Role::where('type','ADMIN')->get();
        return view('admin::admin.user.add',get_defined_vars());
    }

    public function store(Request $request)  {

        $user=auth()->user();
        $request->validate([
            'email' => ['required',Rule::unique('admins')],
        ]);




     $user_new=Admin::create([

        'name'=>$request['name'],
        'middle_name'=>$request['middle_name'],
        'last_name'=>$request['last_name'],
        'email'=>$request['email'],
        'phone_no'=>$request['phone_no'],
        'landline_no'=>$request['landline'],
        'password'=>Hash::make(12345678)
       ]);

       $user_new->assignRole($request['role_id']);




       Session::Flash('success','User Create Successfully');



        return  redirect()->route('admin.users');

    }

    public function update(Request $request)  {

        $user=Admin::find($request['id']);
        $request->validate([
            'email' => ['required',Rule::unique('admins')->ignore($user->id)],
        ]);




     $user_new=Admin::find($request['id'])->update([

        'name'=>$request['name'],
        'middle_name'=>$request['middle_name'],
        'last_name'=>$request['last_name'],
        'email'=>$request['email'],
        'phone_no'=>$request['phone_no'],
        'landline_no'=>$request['landline']
       ]);


       $user->syncRoles($request['role_id']);




       Session::Flash('success','User Update Successfully');



        return  redirect()->route('admin.users');

    }

    public function edit($id)
    {

        $user=Client::find($id);



        $roles=Role::where('type','ADMIN')->get();
        return view('admin::admin.user.edit',get_defined_vars());
    }

    public function view($id)
    {

        $user=Client::find($id);
     return view('admin::admin.hub_user.view',get_defined_vars());
    }


    public function appData($id)
    {

        $user=Client::find($id);

        return view('admin::admin.hub_user.app_data',get_defined_vars());
    }
    public function appDataVehicle($id)
    {

        $user=Client::find($id);

      $vehicles=Vehicle::where('contact_id',$id)->get();

        return view('admin::admin.hub_user.app_data.vehicle',get_defined_vars());
    }

    public function appDataQuote($id)
    {

        $user=Client::find($id);

        $contacts=Quotation::where('contact_detail_id',$id)->get();

        return view('admin::admin.hub_user.app_data.quote',get_defined_vars());
    }

    public function appDataBooking($id)
    {

        $user=Client::find($id);

        $contacts=Booking::where('contact_detail_id',$id)->get();

        return view('admin::admin.hub_user.app_data.booking',get_defined_vars());
    }
    public function appDataInvoice($id)
    {

        $user=Client::find($id);

        $contacts=Invoice::where('contact_id',$id)->get();

        return view('admin::admin.hub_user.app_data.invoice',get_defined_vars());
    }

    public function appDataJob($id)
    {

        $user=Client::find($id);

        $contacts=Booking::with([
            'vehicle.vehicle_model', 'vehicle.vehicle_make', 'vehicle.engine_size', 'vehicle.transmission_type', 'vehicle.fuel_type', 'vehicle.color',
            'contact_detail', 'service', 'job_requests', 'booking_items','job_requests.job_types','job_requests.job_types.job_type',
        ])->where('contact_detail_id', $id)->whereIn('status', ['ARRIVED','INPROGRESS','FINAL_CHECKS','READ_FOR_COLLECTION','READY_FOR_DELIVERY','COLLECTED','DELIVERED'])->get();

        return view('admin::admin.hub_user.app_data.job',get_defined_vars());
    }

    public function appDataVehicleDetail($id,$vehicle_id)
    {

        $user=Client::find($id);

      $contact=Vehicle::find($vehicle_id);

        return view('admin::admin.hub_user.app_data.vehicle_detail',get_defined_vars());
    }
    public function appDataQuoteDetail($id,$quote_id)
    {

        $user=Client::find($id);

      $contact=Quotation::find($quote_id);

        return view('admin::admin.hub_user.app_data.quote_detail',get_defined_vars());
    }

    public function appDataBookingDetail($id,$booking_id)
    {

        $user=Client::find($id);

      $contact=Booking::find($booking_id);

        return view('admin::admin.hub_user.app_data.booking_detail',get_defined_vars());
    }
    public function appDataJobDetail($id,$job_id)
    {

        $user=Client::find($id);

      $contact=Booking::find($job_id);

        return view('admin::admin.hub_user.app_data.job_detail',get_defined_vars());
    }
    public function appDataInvoiceDetail($id,$invoice_id)
    {

        $user=Client::find($id);

      $contact=Invoice::find($invoice_id);

        return view('admin::admin.hub_user.app_data.invoice_detail',get_defined_vars());
    }

    public function password($id)
    {

        $user=Client::find($id);

        return view('admin::admin.hub_user.reset_password',get_defined_vars());
    }


    public function passwordChange(Request $request) {
        $user = Client::find($request->id);





        // return $request;
        $validatedData = $request->validate([
            'password' => 'required|string|confirmed',
        ]);

        $user->password = Hash::make($validatedData['password']);
        $user->update();

       return redirect()->back()->withSuccess('Password Reset Successfully');
    }

    public function userSuspend($id) {
        $user = Client::find($id);


        $user->status=3;

        $user->update();

       return redirect()->back()->withSuccess('User Suspend Successfully');
    }
    public function userActive($id) {
        $user = Client::find($id);


        $user->status=1;

        $user->update();

       return redirect()->back()->withSuccess('User ACTIVE Successfully');
    }
    public function userInActive($id) {
        $user = Client::find($id);


        $user->status=0;

        $user->update();

       return redirect()->back()->withSuccess('User INACTIVE Successfully');
    }
}
