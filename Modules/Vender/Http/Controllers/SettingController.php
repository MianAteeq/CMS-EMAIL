<?php

namespace Modules\Vender\Http\Controllers;

use File;
use Carbon\Carbon;
use App\Models\User;
use Stripe\StripeClient;
use Illuminate\Http\Request;
use Laravel\Cashier\Cashier;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Entities\Packages;
use Modules\Admin\Entities\Services;
use Illuminate\Support\Facades\Session;
use Modules\Admin\Entities\WarrantyJob;
use Modules\Vender\Entities\TradingName;
use Modules\Vender\Entities\Transaction;
use Illuminate\Support\Facades\Validator;
use Modules\Admin\Entities\PaymentMethod;
use Modules\Vender\Entities\VenderAddress;
use Modules\Vender\Entities\VenderInvoice;
use Modules\Vender\Entities\VenderService;
use Modules\Vender\Entities\VendorProfile;
use Illuminate\Contracts\Support\Renderable;
use Modules\Admin\Entities\VehicleSpecialist;
use Modules\Vender\Entities\VenderWarrantyJob;
use Modules\Admin\Entities\AccreditationScheme;
use Modules\Vender\Entities\PackageSubscription;
use Modules\Vender\Entities\VenderPaymentMethod;
use Intervention\Image\ImageManagerStatic as Image;
use Modules\Vender\Entities\VenderVehicleSpecialist;
use Modules\Vender\Entities\VenderAccreditationScheme;

class SettingController extends Controller
{

    public function __construct()
    {
        $this->middleware('is_vender');
    }



    public function vendorProfile() {

        $user=User::find(auth()->user()->id);

       $types=Services::where('parent_id', 0)->get();

       if($user['profile']==null){
       $user->profile=User::find($user['vender_id'])['profile'];

       }

    //    return $user;

        if($user['profile']['step']==0){

            return view('frontend::register-portal.dashboard',get_defined_vars());

        }
        if($user['profile']['step']==1 || $user['profile']['edit_step']==1){

            return view('frontend::register-portal.business-info',get_defined_vars());

        }
        if($user['profile']['step']==2 || $user['profile']['edit_step']==2){

            return view('frontend::register-portal.vat',get_defined_vars());

        }
        if($user['profile']['step']==3 || $user['profile']['edit_step']==3){

            return view('frontend::register-portal.trading_name',get_defined_vars());

        }
        if($user['profile']['step']==4 || $user['profile']['edit_step']==4){

            return view('frontend::register-portal.business-activities',get_defined_vars());

        }
        if($user['profile']['step']==5 || $user['profile']['edit_step']==5){

            return view('frontend::register-portal.trading-unit',get_defined_vars());

        }
        if($user['profile']['step']==6 ||  $user['profile']['edit_step']==6){

            return view('frontend::register-portal.main-account',get_defined_vars());

        }
        if($user['profile']['step']==7 ||  $user['profile']['edit_step']==7){

            $packages=Packages::where('status',0)->get();
            return view('frontend::register-portal.subscription',get_defined_vars());

        }
        if($user['profile']['step']==8){

            $packages=Packages::where('status',0)->get();
            $package=Packages::find($user['profile']['package_id']);
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            if(isset($user['profile']['customer_id'])){
                $payment_method= $stripe->paymentMethods->all([
                    'type' => 'bacs_debit',
                    'limit' => 1,
                    'customer' => $user['profile']['customer_id'],
                  ]);
            }else{
                $payment_method=[];
            }

            return view('frontend::register-portal.bank',get_defined_vars());

        }
        if($user['profile']['step']==9){

            $packages=Packages::where('status',0)->get();

            return view('frontend::register-portal.bank_info',get_defined_vars());

        }

        if($user['profile']['step']==10){

            $packages=Packages::where('status',0)->get();
            return view('frontend::register-portal.term',get_defined_vars());

        }
        if($user['profile']['step']==11){

            $packages=Packages::where('status',0)->get();
            return view('frontend::register-portal.review',get_defined_vars());

        }



    }


    public function vendorProfileVAT(Request $request)  {

        $user=auth()->user();
        if($request['is_save_later']==0){

            $step=$user['profile']['edit_step']==2?$user['profile']['step']:3;
        }else{
            $step=2;
        }
        vendorProfile::where('vender_id',$user['id'])->update([
            'step'=>$step,
            'is_vat'=>1,
            'vat_register'=>$request['vat_register'],
            'uk_vat_no'=>$request['uk_vat_no'],
            'edit_step'=>0
        ]);

        if($request['is_save_later']==1){
            auth()->guard('web')->logout();

            return redirect('login')->with('message', ' Information Save for later');
        }


        return redirect()->back()->with('message', 'VAT info Saved Successfully ');


    }
    public function paymentIntent(Request $request)  {

        $user=auth()->user();
        $stripe = new StripeClient(env('STRIPE_SECRET'));

        $package=Packages::find($user['profile']['package_id']);

        if($package['price']==0){

            $stripe = new \Stripe\StripeClient([
                "api_key" => 'sk_test_51MM85pBv6oafSIoJxxlCMwi5aw8Y8YQyQWKCxADJI1j63n03fXLnP8QlRIOegFWGqnCOpl3Sdwu0vOcHEbHwObrt00kM4F22Zs'
              ]);

              $checkout_session = $stripe->checkout->sessions->create([
                'payment_method_types' => ['bacs_debit'],
                'mode' => 'setup',
                'customer' => $user['profile']['customer_id'],
                'ui_mode' => 'embedded',
                'return_url' => 'http://127.0.0.1:8000/vender/profile/save/bank/turbo?session_id={CHECKOUT_SESSION_ID}',
                // 'return_url' => 'https://linkmoto.fissionmonster.com/vender/profile/save/bank/turbo?session_id={CHECKOUT_SESSION_ID}',
              ]);


                  return response()->json([

                    'clientSecret' => $checkout_session->client_secret,
                 ], 200);

        }else{
            $payment =$stripe->subscriptions->create([
                'customer' => $user['profile']['customer_id'],
                'items' => [['price' => $package['stripe_price_id']]],
                'payment_behavior' => 'default_incomplete',
                'payment_settings' => ['save_default_payment_method' => 'on_subscription'],
                'expand' => ['latest_invoice.payment_intent'],
                'payment_settings' => [
                    'payment_method_types' => ['bacs_debit'],
                ],
            ]);





              return response()->json([
                'subscriptionId' => $payment->id,
                'clientSecret' => $payment->latest_invoice->payment_intent->client_secret,
             ], 200);
        }



    }

    public function termCondition(Request $request) {


        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

       $charge=$stripe->paymentIntents->retrieve($request['payment_intent'], []);



      $invoice=$stripe->invoices->retrieve($charge->invoice, []);
      $subscription_id=$invoice->subscription;

      $latest_invoice=$subscription=$stripe->subscriptions->retrieve($subscription_id, [])->latest_invoice;


     $invoice=$stripe->invoices->retrieve($latest_invoice, []);



        $user=auth()->user();

        if($request['is_save_later']==1){
            auth()->guard('web')->logout();

            return redirect('login')->with('message', ' Information Save for later');
        }

        if($request['payment_intent_client_secret']){
           $sub=PackageSubscription::create([
                'vender_id' => $user['id'],
                'payment_intent_client_secret'=>$request['payment_intent_client_secret'],
                'payment_intent'=>$request['payment_intent'],
                'subscription_id'=>$subscription_id,
                'plan_id'=>$user['profile']['package_id'],
                'start_at'=>Carbon::now(),
                'end_at'=>Carbon::now()->addDays(30)
            ]);
            VenderInvoice::create([
                'vender_id' => $user['id'],
                'subscription_id' => $sub['id'],
                'invoice_id' => $invoice['id'],
                'number' => $invoice['number'],
                'amount_due' => $invoice['amount_due'],
                'amount_paid' => $invoice['amount_paid'],
                'customer' => $invoice['customer'],
                'status' => $invoice['status'],
                'pdf' => $invoice['invoice_pdf'],
                'plan' => $user['profile']['package_id'],
            ]);
            vendorProfile::where('vender_id',$user['id'])->update([
                'step'=>9,
                'is_direct_debit'=>1


            ]);


            return redirect()->route('vender.profiles')->with('message', 'Payment Done Successfully');


        }else{
            vendorProfile::where('vender_id',$user['id'])->update([
                'step'=>9,
                'is_direct_debit'=>1

            ]);


            return redirect()->route('vender.profiles')->with('message', 'Payment Done Successfully');

        }


    }
    public function saveBankForTurbo(Request $request) {

        // return $request;
        $user=auth()->user();
        $sub=PackageSubscription::create([
            'vender_id' => $user['id'],
            'payment_intent_client_secret'=>'N/A',
            'payment_intent'=>'N/A',
            'subscription_id'=>'N/A',
            'plan_id'=>$user['profile']['package_id'],
            'start_at'=>Carbon::now(),
            'end_at'=>Carbon::now()->addDays(30),
            'session_id'=>$request['session_id']
        ]);

        vendorProfile::where('vender_id',$user['id'])->update([
            'step'=>9,
            'is_direct_debit'=>1


        ]);

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

       $charge=$stripe->paymentIntents->retrieve('pi_3P8fkEBv6oafSIoJ1hJspPVA', []);



      $invoice=$stripe->invoices->retrieve($charge->invoice, []);
      $subscription_id=$invoice->subscription;

      $latest_invoice=$subscription=$stripe->subscriptions->retrieve($subscription_id, [])->latest_invoice;


     $invoice=$stripe->invoices->retrieve($latest_invoice, []);



        $user=auth()->user();

        if($request['is_save_later']==1){
            auth()->guard('web')->logout();

            return redirect('login')->with('message', ' Information Save for later');
        }

        if($request['payment_intent_client_secret']){
           $sub=PackageSubscription::create([
                'vender_id' => $user['id'],
                'payment_intent_client_secret'=>$request['payment_intent_client_secret'],
                'payment_intent'=>$request['payment_intent'],
                'subscription_id'=>$subscription_id,
                'plan_id'=>$user['profile']['package_id'],
                'start_at'=>Carbon::now(),
                'end_at'=>Carbon::now()->addDays(30)
            ]);
            VenderInvoice::create([
                'vender_id' => $user['id'],
                'subscription_id' => $sub['id'],
                'invoice_id' => $invoice['id'],
                'number' => $invoice['number'],
                'amount_due' => $invoice['amount_due'],
                'amount_paid' => $invoice['amount_paid'],
                'customer' => $invoice['customer'],
                'status' => $invoice['status'],
                'pdf' => $invoice['invoice_pdf'],
                'plan' => $user['profile']['package_id'],
            ]);
            vendorProfile::where('vender_id',$user['id'])->update([
                'step'=>9,
                'is_direct_debit'=>1


            ]);


            return redirect()->route('vender.profiles')->with('message', 'Payment Done Successfully');


        }else{
            vendorProfile::where('vender_id',$user['id'])->update([
                'step'=>9,
                'is_direct_debit'=>1

            ]);


            return redirect()->route('vender.profiles')->with('message', 'Payment Done Successfully');

        }


    }
    public function termConditionUpdate(Request $request) {
        $user=auth()->user();
        if($request['is_save_later']==0){

            $step=11;
        }else{
            $step=10;
        }
        vendorProfile::where('vender_id',$user['id'])->update([
            'step'=>$step,
            'is_term'=>$request['is_agree']??0,
            'is_terms'=>1

        ]);

        if($request['is_save_later']==1){
            auth()->guard('web')->logout();

            return redirect('login')->with('message', ' Information Save for later');
        }

        return redirect()->route('vender.profiles')->with('message', 'Term and Condition Agree Successfully');

    }



    public function vendorProfileStart(Request $request)  {

        $user=auth()->user();
        vendorProfile::where('vender_id',$user['id'])->update([
            'step'=>$request['is_save_later']==0?1:0,
            'is_overview'=>1
        ]);

        if($request['is_save_later']==1){
            auth()->guard('web')->logout();

            return redirect('login')->with('message', ' Information Save for later');
        }


        return redirect()->back()->with('message', 'Business Registration Start  Successfully ');


    }
    public function vendorProfileBack($id)  {

        $user=auth()->user();
        vendorProfile::where('vender_id',$user['id'])->update([
            'step'=>$id-1,

        ]);


        return redirect()->back();


    }
    public function vendorProfileStep($id)  {

        $user=auth()->user();
        vendorProfile::where('vender_id',$user['id'])->update([
            'edit_step'=>$id,

        ]);

        return redirect()->route('vender.profiles');


    }
    public function submitApplication()  {
        $user=auth()->user();
        User::find($user['id'])->update([
            'application_status'=>'IN_REVIEW'
        ]);
        vendorProfile::where('vender_id',$user['id'])->update([
            'step'=>11,
            'business_status'=>$user['profile']['business_status']==3?0:$user['profile']['business_status'],
            'trading_name_status'=>$user['profile']['trading_name_status']==3?0:$user['profile']['trading_name_status'],
            'vat_status'=>$user['profile']['vat_status']==3?0:$user['profile']['vat_status'],
            'business_activities_status'=>$user['profile']['business_activities_status']==3?0:$user['profile']['business_activities_status'],
            'main_account_status'=>$user['profile']['main_account_status']==3?0:$user['profile']['main_account_status'],
            'subscription_status'=>$user['profile']['subscription_status']==3?0:$user['profile']['subscription_status'],
            'trade_unit_status'=>$user['profile']['trade_unit_status']==3?0:$user['profile']['trade_unit_status'],
            'bank_status'=>$user['profile']['bank_status']==3?0:$user['profile']['bank_status'],
            'is_finish'=>1,
        ]);


        return redirect()->back()->with('message', 'Profile has been Submit for Review');




    }

    public function vendorProfileBusinessInfo(Request $request)  {

        // return $request;

        $user=auth()->user();
        $filePath=$user['profile']['document_proof'];
        $fileName=$user['profile']['document_proof_name'];;
        if ($request->hasFile('document_proof')) {
            $file = $request->file('document_proof');
            $fileName = $file->getClientOriginalName();
            $fileNames = time() . '_' . $file->getClientOriginalName();
            $filePath = $request->file('document_proof')->move('uploads', $fileNames);

            // return 1;
        }

        if($request['is_save_later']==0){

            $step=$user['profile']['edit_step']==1?$user['profile']['step']:2;
        }else{
            $step=$user['profile']['edit_step']==1?$user['profile']['step']:2;
        }


        vendorProfile::where('vender_id',$user['id'])->update([
            'step'=>$step,
            'organization_status'=>$request['organization_status'],
            'company_name'=>$request['company_name'],
            'registration_no'=>$request['registration_no'],
            'address_line_1'=>$request['address_line_1'],
            'address_line_2'=>$request['address_line_2'],
            'address_line_3'=>$request['address_line_3'],
            'address_line_4'=>$request['address_line_4'],
            'city'=>$request['city'],
            'postcode'=>$request['postcode'],
            'document_proof'=>$filePath,
            'document_proof_name'=>$fileName,
            'edit_step'=>0,
            'is_business_info'=>1
        ]);

        if($request['is_save_later']==1){
            auth()->guard('web')->logout();

            return redirect('login')->with('message', ' Information Save for later');
        }

        return redirect()->back()->with('message', 'Business Info Save  Successfully ');


    }
    public function vendorProfileMainAccount (Request $request)  {

        $user=auth()->user();
        $request->validate([
            'email' => ['required',Rule::unique('users')->ignore($user->id)],
        ]);

        if($request['is_save_later']==0){

            $step=$user['profile']['edit_step']==6?$user['profile']['step']:7;
        }else{
            $step=6;
        }

        $filePath=$user['profile']['proof_of_main_contact'];
        $fileName=$user['profile']['proof_of_main_contact_name'];;
        if ($request->hasFile('proof_of_main_contact')) {
            $file = $request->file('proof_of_main_contact');
            $fileName = $file->getClientOriginalName();
            $fileNames = time() . '_' . $file->getClientOriginalName();
            $filePath = $request->file('proof_of_main_contact')->move('uploads', $fileNames);

        }


        if($user['profile']['customer_id']==null){
            $stripe = new StripeClient('sk_test_51MM85pBv6oafSIoJxxlCMwi5aw8Y8YQyQWKCxADJI1j63n03fXLnP8QlRIOegFWGqnCOpl3Sdwu0vOcHEbHwObrt00kM4F22Zs');
            $cus= $stripe->customers->create([
              'name' => $request['name'],
              'email' => $request['email'],
              ]);
              vendorProfile::where('vender_id',$user['id'])->update([
                'step'=>$step,
                'is_main_account'=>1,
                'person_authorised'=>$request['person_authorised'],
                'proof_of_main_contact'=>$filePath,
                'proof_of_main_contact_name'=>$fileName,
                'customer_id'=>$cus->id,
                'edit_step'=>0
            ]);

        }else{
            vendorProfile::where('vender_id',$user['id'])->update([
                'step'=>$user['profile']['edit_step']==6?$user['profile']['step']:7,
                'person_authorised'=>$request['person_authorised'],
                'proof_of_main_contact'=>$filePath,
                'proof_of_main_contact_name'=>$fileName,
                'edit_step'=>0,
                'is_main_account'=>1,
            ]);
        }
        User::find($user['id'])->update([
            'name'=>$request['name'],
            'last_name'=>$request['last_name'],
            'middle_name'=>$request['middle_name'],
            'email'=>$request['email'],


        ]);




        if($request['is_save_later']==1){
            auth()->guard('web')->logout();

            return redirect('login')->with('message', ' Information Save for later');
        }




        return redirect()->back()->with('message', 'Main Account Info Save Successfully ');


    }
    public function vendorProfileBankAccount (Request $request)  {

        $user=auth()->user();

        // return $request;


        if($request['is_save_later']==0){

            $step=$user['profile']['edit_step']==9?$user['profile']['step']:10;
        }else{
            $step=10;
        }

        // return $step;

        $filePath=$user['profile']['bank_proof'];
        $fileName=$user['profile']['bank_proof_name'];;
        if ($request->hasFile('bank_proof')) {
            $file = $request->file('bank_proof');
            $fileName = $file->getClientOriginalName();
            $fileNames = time() . '_' . $file->getClientOriginalName();
            $filePath = $request->file('bank_proof')->move('uploads', $fileNames);

        }


        vendorProfile::where('vender_id',$user['id'])->update([
            'step'=>$step,
            'account_name'=>$request['account_name'],
            'sort_code'=>$request['sort_code'],
            'account_number'=>$request['account_number'],
            'bank_proof'=>$filePath,
            'bank_proof_name'=>$fileName,

            'edit_step'=>0,
            'is_bank'=>1
        ]);



        if($request['is_save_later']==1){
            auth()->guard('web')->logout();

            return redirect('login')->with('message', ' Information Save for later');
        }




        return redirect()->back()->with('message', 'Bank Info Save Successfully ');


    }

    public function vendorProfileBusinessActivities(Request $request)  {

        // return $request;

        $user=auth()->user();

        if($request['is_save_later']==0){

            $step=$user['profile']['edit_step']==4?$user['profile']['step']:5;
        }else{
            $step=4;
        }


        $filePath=$user['profile']['business_proof'];
        $fileName=$user['profile']['business_proof_name'];;
        if ($request->hasFile('business_proof')) {
            $file = $request->file('business_proof');
            $fileName = $file->getClientOriginalName();
            $fileNames = time() . '_' . $file->getClientOriginalName();
            $filePath = $request->file('business_proof')->move('uploads', $fileNames);

        }
        vendorProfile::where('vender_id',$user['id'])->update([
            'step'=>$user['profile']['edit_step']==4?$user['profile']['step']:5,
            'is_business_activity'=>1,

            'business_proof'=>$filePath,
            'business_proof_name'=>$fileName,
            'edit_step'=>0
        ]);

        VenderService::where('vender_id',$user['id'])->delete();

        if(isset($request['service_id'])){
            foreach ($request['service_id'] as $key => $service_id) {
                VenderService::create([
                    'service_id'=>$service_id,
                    'vender_id'=>$user['id']
                ]);
            }
        }


        if($request['is_save_later']==1){
            auth()->guard('web')->logout();

            return redirect('login')->with('message', ' Information Save for later');
        }


        return redirect()->back()->with('message', 'Business Activities Save  Successfully ');


    }
    public function vendorProfileTradingUnit(Request $request)  {
        $user=auth()->user();


        if($request['is_save_later']==0){

            $step=$user['profile']['edit_step']==5?$user['profile']['step']:6;
        }else{
            $step=5;
        }


        if($request['operation_type']=="Mobile"){
            vendorProfile::where('vender_id',$user['id'])->update([
                'step'=>$step,
                'operation_type'=>$request['operation_type'],
                'is_trading_unit'=>1,
                'edit_step'=>0
            ]);
        }else{



        $filePath=$user['profile']['proof'];
        $fileName=$user['profile']['proof_name'];;
        if ($request->hasFile('proof')) {
            $file = $request->file('proof');
            $fileName = $file->getClientOriginalName();
            $fileNames = time() . '_' . $file->getClientOriginalName();
            $filePath = $request->file('proof')->move('uploads', $fileNames);

        }
        vendorProfile::where('vender_id',$user['id'])->update([
            'step'=>$step,
            'is_trading_unit'=>1,
            'operation_type'=>$request['operation_type'],
            'edit_step'=>0
        ]);
        $vender_address=VenderAddress::where('vender_id',$user['id'])->first();

        if($vender_address){
            VenderAddress::find($vender_address['id'])->update([
                'vender_id'=>$user['id'],
                'address_line_1'=>$request['address_line_1'],
                'address_line_2'=>$request['address_line_2'],
                'address_line_3'=>$request['address_line_3'],
                'address_line_4'=>$request['address_line_4'],
                'city'=>$request['city'],
                'postcode'=>$request['postcode'],
                'type'=>'Site',
                'proof'=>$filePath,
                'proof_name'=>$fileName
            ]);

        }else{
            VenderAddress::create([
                'vender_id'=>$user['id'],
                'address_line_1'=>$request['address_line_1'],
                'address_line_2'=>$request['address_line_2'],
                'address_line_3'=>$request['address_line_3'],
                'address_line_4'=>$request['address_line_4'],
                'city'=>$request['city'],
                'postcode'=>$request['postcode'],
                'type'=>'Site',
                'proof'=>$filePath,
                'proof_name'=>$fileName
            ]);

        }

    }

    if($request['is_save_later']==1){
        auth()->guard('web')->logout();

        return redirect('login')->with('message', ' Information Save for later');
    }

        return redirect()->back()->with('message', 'Trading Unit  Save  Successfully ');


    }
    public function vendorProfileTradingName(Request $request)  {

        // return $request;
        $user=auth()->user();
        if($request['is_save_later']==0){

            $step=$user['profile']['edit_step']==3?$user['profile']['step']:4;
        }else{
            $step=3;
        }


        vendorProfile::where('vender_id',$user['id'])->update([
            'step'=>$step,
            'is_trading_names'=>1,
            'is_trading_name'=>$request['is_trading_name']??'NO',
            'edit_step'=>0

        ]);

        if($request['is_save_later']==1){
            auth()->guard('web')->logout();


        }


        return response()->json([

            'status'=>true
]);
    }
    public function vendorProfilePlanSelect(Request $request)  {

        // return $request;

        $user=auth()->user();

        if($request['is_save_later']==0){

            $step=$user['profile']['edit_step']==7?$user['profile']['step']:8;
        }else{
            $step=7;
        }
        if($user['profile']['package_id']==$request['package_id']){



        vendorProfile::where('vender_id',$user['id'])->update([
            'step'=>$step,
            'package_id'=>$request['package_id'],
            'product_name'=>$request['product_name'],
            'edit_step'=>0,
            'is_subscription'=>1,

        ]);

    }else{
        if($request['is_save_later']==0){

            $step=8;
        }else{
            $step=7;
        }
        vendorProfile::where('vender_id',$user['id'])->update([
            'step'=>$step,
            'package_id'=>$request['package_id'],
            'product_name'=>$request['product_name'],
            'edit_step'=>0,
            'is_subscription'=>1,

        ]);

        PackageSubscription::where('vender_id',$user['id'])->update([
            'is_active'=>0
        ]);
    }
    if($request['is_save_later']==1){
        auth()->guard('web')->logout();

        return redirect('login')->with('message', ' Information Save for later');
    }


        return redirect()->back()->with('message', 'Subscription Select  Successfully ');


    }
    public function addTradingName(Request $request)  {


        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string','max:255'],

        ]);

        if ($validator->fails()) {
            return response()->json([
                        'error' => $validator->errors()->first(),
                        'status'=>false
            ]);
        }

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
       ]);


       return  response()->json([
        'message'=>'Trading Name Added Successfully',
        'status'=>true,
        'name'=>TradingName::find($trading_name['id'])
       ]);


    }


    public function TradingNameDel ($id) {
        $trading_name=TradingName::find($id)->delete();


           return  response()->json([
            'message'=>'Trading Name Delete Successfully',
            'status'=>true,

           ]);

    }


    // /**
    //  * Get Setting View

    //  */

    // public function index(Request $request)
    // {

    //     try{
    //         $sub = auth()->user()->subscriptions()->first()['name']??null;
    //         if($sub!=null){
    //             $subcription = Auth::user()->subscription($sub)->asStripeSubscription();
    //             $end_date = Carbon::createFromTimeStamp($subcription->current_period_end)->format('F jS, Y');
    //             $start_date = Carbon::createFromTimeStamp($subcription->current_period_start)->format('F jS, Y');
    //             $transactions = Transaction::where('user_id', auth()->user()->id)->get();

    //             $intent = auth()->user()->createSetupIntent();

    //         }



    //         $warranty_jobs = WarrantyJob::all();
    //         $vehicle_specialists = VehicleSpecialist::all();
    //         $accredictions = AccreditationScheme::all();
    //         $payment_methods = PaymentMethod::all();
    //         $services = Services::all();
    //         $transactions=[];



    //         $user=User::with('payment_methods', 'vehicle_specialists', 'warranty_jobs', 'accreditation_schemes', 'vender_services')->find(auth()->user()->id);

    //         // return $user['vender_services'];
    //         $all_services=Services::where('parent_id',0)->get();




    //         return view('vender::setting.index', get_defined_vars());

    //     } catch (\Exception $e) {

    //         return redirect()->route('website.index');
    //     }

    // }
    // public function service(Request $request)
    // {

    //     try{
    //         // $sub = auth()->user()->subscriptions()->first()['name']??null;
    //         // if($sub!=null){
    //         //     $subcription = Auth::user()->subscription($sub)->asStripeSubscription();
    //         //     $end_date = Carbon::createFromTimeStamp($subcription->current_period_end)->format('F jS, Y');
    //         //     $start_date = Carbon::createFromTimeStamp($subcription->current_period_start)->format('F jS, Y');
    //         //     $transactions = Transaction::where('user_id', auth()->user()->id)->get();

    //         //     $intent = auth()->user()->createSetupIntent();

    //         // }



    //         // $warranty_jobs = WarrantyJob::all();
    //         // $vehicle_specialists = VehicleSpecialist::all();
    //         // $accredictions = AccreditationScheme::all();
    //         // $payment_methods = PaymentMethod::all();
    //         // $services = Services::all();
    //         // $transactions=[];



    //         $user=User::with('payment_methods', 'vehicle_specialists', 'warranty_jobs', 'accreditation_schemes', 'vender_services')->find(auth()->user()->id);

    //      $all_services=Services::where('parent_id',0)->get();

    //         return view('vender::setting.services', get_defined_vars());

    //     } catch (\Exception $e) {

    //         return redirect()->route('website.index');
    //     }

    // }

    // /**
    //  * Update Setting

    //  */


    //  public function profileUpdate(Request $request)
    //  {

    //     // return $request;

    //     $id=0;
    //     if(auth()->user()->profile!=null){

    //         $id=auth()->user()->profile['id'];
    //     }

    //     if(auth()->user()->profile == null){
    //         $request->validate([
    //             'company_name' => ['required', 'unique:vendor_profiles', 'max:255'],
    //             'registration_no' => ['required', 'unique:vendor_profiles', 'max:255'],
    //             'email' => 'required|unique:users,email,' . auth()->user()->id,

    //         ]);
    //         if ($request->image) {
    //             $filename = time() . '.' . $request->image->extension();
    //             $path = public_path('profile/image/');
    //             $upload_image = $path . $filename;
    //             if (!File::exists($path)) {
    //                 File::makeDirectory($path, $mode = 0777, true, true);
    //             }
    //             $img = Image::make($request->image)->resize(200, 200);
    //             $img->save($upload_image);

    //             $image_name = 'profile/image/' . $filename;
    //         } else {
    //             $image_name = "";
    //         }

    //         User::find(auth()->user()->id)->update([

    //             'name' => $request['name'],
    //             'last_name' => $request['last_name'],
    //             'email' => $request['email'],
    //             'profile_pic'=> $image_name
    //         ]);

    //         $setting = $request->except('_token', 'name', 'email', 'last_name','image', 'warranty_job_id', 'vehicle_specialist_id', 'payment_method_id', 'accrediction_id', 'service_id');

    //         VendorProfile::create([
    //             "vender_id" => auth()->user()->id,
    //             ...$setting,
    //         ]);
    //         VenderWarrantyJob::where('vender_id', auth()->user()->id)->delete();
    //         // VenderService::where('vender_id', auth()->user()->id)->delete();
    //         VenderVehicleSpecialist::where('vender_id', auth()->user()->id)->delete();
    //         VenderPaymentMethod::where('vender_id', auth()->user()->id)->delete();
    //         VenderAccreditationScheme::where('vender_id', auth()->user()->id)->delete();
    //         if (isset($request['service_id'])) {
    //             foreach ($request['service_id'] as $key => $value) {
    //                 VenderService::create([
    //                     'vender_id' => auth()->user()->id,
    //                     'service_id' => $value,
    //                 ]);
    //             }
    //         }
    //         if (isset($request['warranty_job_id'])) {
    //             foreach ($request['warranty_job_id'] as $key => $value) {
    //                 VenderWarrantyJob::create([
    //                     'vender_id' => auth()->user()->id,
    //                     'warranty_job_id' => $value,
    //                 ]);
    //             }
    //         }
    //         if (isset($request['vehicle_specialist_id'])) {
    //             foreach ($request['vehicle_specialist_id'] as $key => $value) {
    //                 VenderVehicleSpecialist::create([
    //                     'vender_id' => auth()->user()->id,
    //                     'vehicle_specialist_id' => $value,
    //                 ]);
    //             }
    //         }
    //         if (isset($request['payment_method_id'])) {
    //             foreach ($request['payment_method_id'] as $key => $value) {
    //                 VenderPaymentMethod::create([
    //                     'vender_id' => auth()->user()->id,
    //                     'payment_method_id' => $value,
    //                 ]);
    //             }
    //         }
    //         if (isset($request['accrediction_id'])) {
    //             foreach ($request['accrediction_id'] as $key => $value) {
    //                 VenderAccreditationScheme::create([
    //                     'vender_id' => auth()->user()->id,
    //                     'accreditation_id' => $value,
    //                 ]);
    //             }
    //         }
    //         Session::flash('settingValue', 'PROFILE');

    //         return redirect()->back()->with('message', 'Profile Has Been Updated Successfully 1');

    //     }else{



    //         $request->validate([
    //             'company_name' => 'required|unique:vendor_profiles,company_name,' . $id,
    //             'registration_no' =>  'required|unique:vendor_profiles,registration_no,' . $id,
    //             'email' => 'required|unique:users,email,' . auth()->user()->id,


    //         ]);

    //         if ($request->address_proff) {
    //             $file = $request->file('address_proff');
    //             $filename = time() . '.' . $request->address_proff->extension();
    //             $path = public_path('profile/image/');
    //             $upload_image = $path . $filename;
    //             if (!File::exists($path)) {
    //                 File::makeDirectory($path, $mode = 0777, true, true);
    //             }

    //             $file->move(public_path('profile/image'), $filename);


    //             $address_proff ='profile/image/'. $filename ;
    //         } else {
    //             $address_proff = $request['old_address_proff'];
    //         }
    //         if ($request->mechanic_docs) {
    //             $file = $request->file('mechanic_docs');
    //             $filename = time() . '.' . $request->mechanic_docs->extension();
    //             $path = public_path('profile/image/');
    //             $upload_image = $path . $filename;
    //             if (!File::exists($path)) {
    //                 File::makeDirectory($path, $mode = 0777, true, true);
    //             }
    //             $file->move(public_path('profile/image'), $filename);


    //             $mechanic_docs ='profile/image/'. $filename ;

    //         } else {
    //             $mechanic_docs = $request['old_mechanic_docs'];
    //         }






    //         if ($request->image) {
    //             $filename = time() . '.' . $request->image->extension();
    //             $path = public_path('profile/image/');
    //             $upload_image = $path . $filename;
    //             if (!File::exists($path)) {
    //                 File::makeDirectory($path, $mode = 0777, true, true);
    //             }
    //             $img = Image::make($request->image)->resize(200, 200);
    //             $img->save($upload_image);

    //             $image_name = 'profile/image/' . $filename;
    //         } else {
    //             $image_name = "";
    //         }

    //         User::find(auth()->user()->id)->update([

    //             'name' => $request['name'],
    //             'last_name' => $request['last_name'],
    //             'email' => $request['email'],
    //             'profile_pic' => $image_name
    //         ]);

    //         $setting = $request->except('_token', 'name', 'email', 'last_name', 'image', 'address_proff', 'mechanic_docs', 'old_address_proff', 'old_mechanic_docs', 'service_id','warranty_job_id', 'vehicle_specialist_id', 'payment_method_id', 'accrediction_id');



    //         VendorProfile::find($id)->update([
    //             "vender_id" => auth()->user()->id,
    //             'address_proff'=> $address_proff,
    //             'mechanic_docs'=> $mechanic_docs,
    //             'owner_middle_name'=> $request->owner_middle_name,
    //             'phone_no'=> $request->phone_no,
    //             'company_name'=> $request->company_name,
    //             'trading_name'=> $request->trading_name,
    //             'registration_no'=> $request->registration_no,
    //             'operation_type'=> $request->operation_type,
    //             'area'=> $request->area,
    //             'website'=> $request->website,
    //             // var_dump(...$setting),
    //         ]);
    //         VenderWarrantyJob::where('vender_id', auth()->user()->id)->delete();
    //         VenderVehicleSpecialist::where('vender_id', auth()->user()->id)->delete();
    //         VenderPaymentMethod::where('vender_id', auth()->user()->id)->delete();
    //         VenderAccreditationScheme::where('vender_id', auth()->user()->id)->delete();
    //         // VenderService::where('vender_id', auth()->user()->id)->delete();

    //         if (isset($request['service_id'])) {
    //             foreach ($request['service_id'] as $key => $value) {
    //                 VenderService::create([
    //                     'vender_id' => auth()->user()->id,
    //                     'service_id' => $value,
    //                 ]);
    //             }
    //         }

    //         if(isset($request['warranty_job_id'])){
    //             foreach ($request['warranty_job_id'] as $key => $value) {
    //                 VenderWarrantyJob::create([
    //                     'vender_id'=>auth()->user()->id,
    //                     'warranty_job_id'=>$value,
    //                 ]);
    //             }
    //         }
    //         if(isset($request['vehicle_specialist_id'])){
    //             foreach ($request['vehicle_specialist_id'] as $key => $value) {
    //                 VenderVehicleSpecialist::create([
    //                     'vender_id'=>auth()->user()->id,
    //                     'vehicle_specialist_id'=>$value,
    //                 ]);
    //             }
    //         }
    //         if(isset($request['payment_method_id'])){
    //             foreach ($request['payment_method_id'] as $key => $value) {
    //                 VenderPaymentMethod::create([
    //                     'vender_id'=>auth()->user()->id,
    //                     'payment_method_id'=>$value,
    //                 ]);
    //             }
    //         }
    //         if(isset($request['accrediction_id'])){
    //             foreach ($request['accrediction_id'] as $key => $value) {
    //                 VenderAccreditationScheme::create([
    //                     'vender_id'=>auth()->user()->id,
    //                     'accreditation_id'=>$value,
    //                 ]);
    //             }
    //         }

    //         Session::flash('settingValue', 'PROFILE');
    //         return redirect()->back()->with('message', 'Profile Has Been Updated Successfully 2');


    //     }





    //  }
    //  public function serviceUpdate(Request $request)
    //  {

    //     // return $request;

    //     VenderService::where('vender_id', auth()->user()->id)->delete();

    //     if (isset($request['service_id'])) {
    //             foreach ($request['service_id'] as $key => $value) {
    //                 VenderService::create([
    //                     'vender_id' => auth()->user()->id,
    //                     'service_id' => $value,
    //                 ]);
    //             }
    //         }
    //     Session::flash('settingValue', 'PROFILE');
    //     return redirect()->back()->with('message', 'Services Has Been Updated Successfully 2');




    //  }

    // //  f
    // public function socialUpdate(Request $request)
    // {
    //     # code...

    //     $setting = $request->except('_token');
    //     VendorProfile::where('vender_id',auth()->user()->id)->update([
    //         "vender_id" => auth()->user()->id,
    //         ...$setting,
    //     ]);

    //     Session::flash('settingValue', 'SOCIAL');

    //     return redirect()->back()->with('message', 'Social Link Has Been Updated Successfully');
    // }

    //  public function endSubscription(Request $request)
    //  {
    //     $user=auth()->user();
    //     $sub = auth()->user()->subscriptions()->first()['name'];

    //     $user->subscription($sub)->cancel();

    //     Session::flash('settingValue', 'SUBSCRIPTION');

    //     return redirect()->back()->with('message', 'Subscription Cancel Successfully');

    //  }
    //  public function resumeSubscription(Request $request)
    //  {
    //     $user=auth()->user();
    //     $sub = auth()->user()->subscriptions()->first()['name'];

    //     $user->subscription($sub)->resume();
    //     Session::flash('settingValue', 'SUBSCRIPTION');

    //     return redirect()->back()->with('message', 'Subscription Resume Successfully');

    //  }

    //  public function paymentMethodUpdate(Request $request)
    //  {
    // //    return $request;
    //     $user = auth()->user();
    //     $user->updateDefaultPaymentMethodFromStripe($request['paymentMethod']);

    //     Session::flash('message', 'Card Update Successfully');

    //     Session::flash('settingValue', 'PAYMENT');


    //     return true;


    //  }

    // public function comming_soon(Request $request)
    // {
    //     return view('vender::comming_soon.index');
    // }


}
