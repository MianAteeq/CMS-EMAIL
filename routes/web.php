<?php

use Carbon\Carbon;
use Stripe\Stripe;
use App\Models\User;
use App\Models\TestItem;
use Stripe\StripeClient;
use Stripe\PaymentIntent;
use Barryvdh\DomPDF\Facade\Pdf;
use Modules\Vender\Entities\Team;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Modules\Admin\Entities\Packages;
use Modules\Vender\Entities\Booking;
use Modules\Vender\Entities\Invoice;
use Modules\Vender\Entities\UserApp;
use Modules\Vender\Entities\Vehicle;
// use Modules\Vender\Entities\BookingTransaction;
use Salman\GeoCode\Services\GeoCode;
use Illuminate\Support\Facades\Route;
use Modules\ClientHub\Entities\Client;
use Modules\Vender\Entities\Quotation;
use Modules\Vender\Entities\JobRequest;
use Modules\Vender\Entities\TradingName;
use Modules\Vender\Entities\TradingUnit;
use Modules\Vender\Entities\Transaction;
use Spatie\Permission\Models\Permission;
use Modules\Vender\Entities\QuickProduct;
use GuzzleHttp\Client as GuzzleHttpClient;
use Modules\Vender\Entities\ContactDetail;
use Modules\Vender\Entities\QuotationItem;
use Modules\Vender\Entities\VenderAddress;
use Modules\Vender\Entities\VenderInvoice;
use Modules\Vender\Entities\VenderService;
use Modules\Vender\Entities\VendorProfile;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;
use Modules\Vender\Entities\BookingJobItem;
use Kutia\Larafirebase\Facades\Larafirebase;
use Modules\Vender\Entities\UserTradingUnit;
use Modules\Vender\Entities\BookingJobRequest;
use Modules\Vender\Entities\VenderWarrantyJob;
use Modules\Vender\Entities\BookingTransaction;
use Modules\Vender\Entities\CustomNotification;
use Modules\Vender\Entities\PackageSubscription;
use Modules\Vender\Entities\QuickProductJobType;
use Modules\Vender\Entities\VenderPaymentMethod;
use Modules\Vender\Entities\BookingJobItemJobType;
use Modules\Vender\Entities\TradingUnitAppSetting;
use Modules\Vender\Entities\TradingUnitHubProfile;
use Modules\Vender\Entities\TradingUnitWarrentyJob;
use Modules\Vender\Entities\QuotationJobItemJobType;
use Modules\Vender\Entities\VenderVehicleSpecialist;
use Modules\Vender\Entities\BookingJobRequestJobType;
use Modules\Vender\Entities\TradingUnitPaymentMethod;
use Modules\Vender\Entities\VenderAccreditationScheme;
use Modules\Vender\Entities\QuotationJobRequestJobType;
use Modules\Vender\Entities\TradingUnitVehicleSpecialist;
use Modules\Vender\Entities\TradingUnitAccreditationScheme;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\MessaeController;
use Modules\Vender\Http\Controllers\ServiceProviderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/test/jobs', [EmailController::class, 'getEmail']);
Route::get('/get/jobs', [EmailController::class, 'getStat']);
Route::get('/send/message', [MessaeController::class, 'sendMessage']);
Route::get('/get/instance', [MessaeController::class, 'getWhatsAppInfo']);
Route::get('/get/qr/code', [MessaeController::class, 'getWhatsAppIQrCode']);


Route::get('/greeting', function () {



    $auth_id=63;

    $new_user=new stdClass();

      $user = User::with('payment_methods', 'quick_products', 'vender_services', 'vehicle_specialists', 'warranty_jobs', 'accreditation_schemes', 'profile','trading_unit','trading_unit.trading_name')->find($auth_id);

      if($user['profile']==null){


          $new_user=collect($user)->except('profile');
          $new_user['profile']=User::find($user['vender_id'])['profile'];;
      }else{
        //   $new_user=$user;
      }

      if($user['vender_id']==0){
          $permissions=Permission::where('group_type','APP')->pluck('name');
      }else{

          $permissions=collect($user['provider_app']['group']['permissions'])->pluck('name');
      }
    return  get_defined_vars();






    $package=Packages::where('price',0)->first();
    $users=User::whereHas('profile', function($q) use($package){
        $q->where('package_id',$package['id']);
    })->get();

    foreach ($users as $key => $user) {

        $invoices=Invoice::where('is_verified',0)->where('vender_id',$user['id'])->get();

        $commission=0;

        foreach($invoices as $invoice){
            $commission+=($invoice['total']*5)/100;
        }


        $stripe = new StripeClient(env('STRIPE_SECRET'));


      $invoice=$stripe->invoices->create([
            'customer' => $user['profile']['customer_id'],
            'collection_method'=>'send_invoice',
            'days_until_due'=>2,

        ]);
         $stripe->invoiceItems->create([
            'customer' => $user['profile']['customer_id'],
            'amount' => ($commission*100),
            'currency' => 'gbp',
            'description'=> 'Service Provider Commission',
            'invoice'=>$invoice['id']

        ]);
        $stripe->invoices->finalizeInvoice($invoice['id'], []);


       $subs=PackageSubscription::where('vender_id',$user['id'])->first();

       $invoice_latest=$stripe->invoices->retrieve($invoice['id'], []);

        VenderInvoice::create([
            'vender_id' => $user['id'],
            'subscription_id' => $subs['id']??0,
            'invoice_id' => $invoice_latest['id'],
            'number' => $invoice_latest['number'],
            'amount_due' => $invoice_latest['total'],
            'amount_paid' => $invoice_latest['amount_paid'],
            'customer' => $invoice_latest['customer'],
            'status' => $invoice_latest['status'],
            'pdf' => $invoice_latest['invoice_pdf'],
            'plan' => $user['profile']['package_id'],
        ]);
    }




    // \Stripe\Stripe::setApiKey('sk_test_51MM85pBv6oafSIoJxxlCMwi5aw8Y8YQyQWKCxADJI1j63n03fXLnP8QlRIOegFWGqnCOpl3Sdwu0vOcHEbHwObrt00kM4F22Zs');

//

//    $payment_method= $stripe->paymentMethods->all([
//         'type' => 'bacs_debit',
//         'limit' => 1,
//         'customer' => 'cus_Q1zNX5eQlJrbun',
//       ]);
// // return $intent= $stripe->checkout->sessions->retrieve('cs_test_c1hXFadIWKq5ZyWKB7hFwoNyCTVFrLchFTL2kFtQjXoQnCGO4LqYz5GN9r', []);


// return  \Stripe\PaymentIntent::create([
//     'payment_method_types' => ['bacs_debit'],
//     'payment_method' => $payment_method['data'][0],
//     'customer' => 'cus_Q1zNX5eQlJrbun',
//     'confirm' => true,
//     'amount' => 100,
//     'currency' => 'gbp',
//   ]);

// return $session = \Stripe\Checkout\Session::create([
//   'payment_method_types' => ['bacs_debit'],
//   'mode' => 'setup',
//   'customer' => 'cus_Q1zNX5eQlJrbun',
//   'success_url' => 'https://example.com/success?session_id={CHECKOUT_SESSION_ID}',
//   'cancel_url' => 'https://example.com/cancel',
// ]);

// $stripe = new \Stripe\StripeClient([
//     "api_key" => 'sk_test_51MM85pBv6oafSIoJxxlCMwi5aw8Y8YQyQWKCxADJI1j63n03fXLnP8QlRIOegFWGqnCOpl3Sdwu0vOcHEbHwObrt00kM4F22Zs'
//   ]);

//   $checkout_session = $stripe->checkout->sessions->create([
//     'payment_method_types' => ['bacs_debit'],
//     'mode' => 'setup',
//     'customer' => 'cus_Q1zNX5eQlJrbun',
//     'ui_mode' => 'embedded',
//     'return_url' => 'https://example.com/checkout/return?session_id={CHECKOUT_SESSION_ID}',
//   ]);

//     echo json_encode(array('clientSecret' => $checkout_session->client_secret));



});
Route::get('/tests', function () {

    $user = User::where('vender_id', '0939295e-00a1-70de-3b38-4c004b6e4344')->first();

if ($user) {
    $user->givePermissionTo(Permission::pluck('name')->toArray());
}
});
Route::get('/create-checkout-session', function () {

    $stripe = new \Stripe\StripeClient([
        "api_key" => 'sk_test_51MM85pBv6oafSIoJxxlCMwi5aw8Y8YQyQWKCxADJI1j63n03fXLnP8QlRIOegFWGqnCOpl3Sdwu0vOcHEbHwObrt00kM4F22Zs'
      ]);

      $checkout_session = $stripe->checkout->sessions->create([
        'payment_method_types' => ['bacs_debit'],
        'mode' => 'setup',
        'customer' => 'cus_Q1zNX5eQlJrbun',
        'ui_mode' => 'embedded',
        'return_url' => 'https://example.com/checkout/return?session_id={CHECKOUT_SESSION_ID}',
      ]);

        // echo json_encode(array('clientSecret' => $checkout_session->client_secret));







          return response()->json([

            'clientSecret' => $checkout_session->client_secret,
         ], 200);
});
Route::get('/create-payment-intent', function () {

    $stripe = new StripeClient('sk_test_OPZIufRlS22dhu4r5Phf5rD9');

      $payment =$stripe->subscriptions->create([
        'customer' => 'cus_PSq2v4Z0eZ4iZx',
        'items' => [['price' => 'price_1OduLGHdKT0LBfO0lY4r0c2g']],
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
});
Route::get('/update/record', function () {
   $clients= Client::all();

   foreach ($clients as $key => $client) {
      Client::find($client->id)->update([
         'lat'=>'31.5034542',
         'long'=>'74.3480952'
      ]);
   }
   $clients= User::all();

   foreach ($clients as $key => $client) {
      User::find($client->id)->update([
         'lat'=>'31.466069917703614',
         'long'=>'74.38640510578162'
      ]);
   }

});


Route::get('invoice/view/{id}', function ($id) {
    //

    $vender_id = 62;

    $invoices = Invoice::with(['booking','trading_name', 'booking.contact_detail', 'booking.service', 'booking.job_requests', 'booking.booking_items', 'booking.vehicle.vehicle_model', 'booking.vehicle.vehicle_make', 'booking.vehicle.engine_size', 'booking.vehicle.transmission_type', 'booking.vehicle.fuel_type', 'booking.vehicle.color', 'payments','booking.trading_name'])->where('vender_id', $vender_id)->find($id);
    $item_array = $invoices['booking']['booking_items'];

    $first_array = [];
    $second_array = [];
    $third_array = [];
    $count = 0;

    foreach ($item_array as $key => $value) {
        if ($count <= 9) {
            $first_array[$key] = $value;
            $first_array[$key]['totalPrice'] = $value['total_price'];
        } else if ($count <= 19) {
            $second_array[$key] = $value;
            $second_array[$key]['totalPrice'] = $value['total_price'];
        } else {
            $third_array[$key] = $value;
            $third_array[$key]['totalPrice'] = $value['total_price'];
        }

        $count++;
    }





    // return $records;
    $data = [
        'invoice'    => $invoices,
        'vender' => User::with('profile')->find($invoices['vender_id']),
        'item_array' => $item_array,
        'first_array' => $first_array,
        'second_array' => $second_array,
        'third_array' => $third_array,
    ];


    // return get_defined_vars();

    $pdf = Pdf::loadView('pdf.invoice',$data);
   return $content = $pdf->download();


});


