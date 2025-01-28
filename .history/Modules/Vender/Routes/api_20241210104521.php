<?php

use Illuminate\Http\Request;
use Modules\Vender\Entities\BookingJobItem;
use Modules\Vender\Http\Controllers\Api\BookingController;
use Modules\Vender\Http\Controllers\Api\ContactController;
use Modules\Vender\Http\Controllers\Api\HelperController;
use Modules\Vender\Http\Controllers\Api\JobRequestController;
use Modules\Vender\Http\Controllers\Api\LoginController;
use Modules\Vender\Http\Controllers\Api\ProfileController;
use Modules\Vender\Http\Controllers\Api\QuotationItemController;
use Modules\Vender\Http\Controllers\Api\VehicleController;
use Modules\Vender\Http\Controllers\BookJobItemController;
use Modules\Vender\Http\Controllers\BookJobRequestController;
use Modules\Vender\Http\Controllers\InvoiceController;
use Modules\Vender\Http\Controllers\QueueController;
use Modules\Vender\Http\Controllers\QuotationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/$LOWER_NAME$', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['cors']], function () {

    Route::middleware('throttle:10,1,login')->group(function () {

            Route::post('login', [LoginController::class, 'login']);


            Route::post('send/email/otp', [LoginController::class, 'sendOtp']);

            Route::post('verify/otp', [LoginController::class, 'verifyOtp']);
    });

    Route::middleware(['auth:sanctum'])->group(function () {

            Route::post('change/password', [LoginController::class, 'updatePassword']);
            Route::post('fetch/menu/count', [HelperController::class, 'menuCount']);

             Route::post('delete/account', [LoginController::class, 'deleteAccount']);

             Route::post('fetch/trading/unit', [LoginController::class, 'fetchTradingUnit']);
             Route::post('set/trading/unit', [LoginController::class, 'setTradingUnit']);


                    /************  Contact Detail  ***************/

            Route::post('contact/detail/save', [ContactController::class, 'saveContactDetail']);
            Route::post('contact/detail/update', [ContactController::class, 'updateContactDetail']);
            Route::post('contact/detail', [ContactController::class, 'getContactDetail']);
            Route::post('contact/single/detail', [ContactController::class, 'getSingleContactDetail']);
            Route::post('contact/detail/search', [ContactController::class, 'searchContactDetail']);
            Route::post('contact/details/delete', [ContactController::class, 'contactDelete']);




              /************  Helper Route   ***************/

            Route::post('vehicle/make', [HelperController::class, 'getVehicleMake']);
            Route::post('vehicle/model', [HelperController::class, 'getVehicleModel']);
            Route::post('vehicle/engine/size', [HelperController::class, 'getEngineSize']);
            Route::post('vehicle/transmission/type', [HelperController::class, 'getTransmissionType']);
            Route::post('vehicle/vehicle/color', [HelperController::class, 'getVehicleColor']);
            Route::post('vehicle/fuel/type', [HelperController::class, 'getFuelType']);
            Route::post('fetch/service', [HelperController::class, 'fetchService']);
            Route::post('fetch/job/type', [HelperController::class, 'fetchJobType']);
            Route::post('fetch/price/type', [HelperController::class, 'fetchPriceType']);

            Route::post('fetch/quick/job', [HelperController::class, 'fetchQuickJob']);
            Route::post('fetch/quotation/job', [HelperController::class, 'fetchQuotationJob']);
            Route::post('fetch/booking/job', [HelperController::class, 'fetchBookingJob']);
            Route::post('fetch/notification', [HelperController::class, 'fetchNotification']);
            Route::post('clear/notification', [HelperController::class, 'clearNotification']);


                  /************  Vehicle Detail  ***************/

            Route::post('vehicle/detail/save', [VehicleController::class, 'saveVehicleDetail']);
            Route::post('vehicle/detail/update', [VehicleController::class, 'updateVehicleDetail']);
            Route::post('vehicle/detail', [VehicleController::class, 'getVehicleDetail']);
            Route::post('vehicle/single/detail', [VehicleController::class, 'getSingleVehicleDetail']);
            Route::post('vehicle/detail/search', [VehicleController::class, 'searchVehicleDetail']);
            Route::post('vehicle/connect', [VehicleController::class, 'vehicleConnect']);
            Route::post('vehicle/dis/connect', [VehicleController::class, 'vehicleDisConnect']);
                Route::post('vehicle/details/delete', [VehicleController::class, 'vehicleDelete']);


                     /************  Quotation  ***************/

            Route::post('quotation/save', [QuotationController::class, 'saveQuotation']);
            Route::post('quotation/delete', [QuotationController::class, 'deleteQuotation']);
            Route::post('quotation/booking/save', [QuotationController::class, 'saveBooking']);
            Route::post('quotation/save/to/draft', [QuotationController::class, 'saveQuotationDraft']);
            Route::post('quotation/confirm', [QuotationController::class, 'confirmQuotation']);
            Route::post('fetch/quotation', [QuotationController::class, 'getQuotationDetail']);
            Route::post('find/quotation', [QuotationController::class, 'getSingleQuotation']);
            Route::post('find/quotation', [QuotationController::class, 'getSingleQuotation']);
            Route::post('fetch/queue', [QueueController::class, 'getQuotationDetail']);

                /************  Quotation Status  ***************/

            Route::post('quotation/status', [QuotationController::class, 'statusQuotation']);




                /************  Quotation End Status  ***************/



                     /************  Job Request  ***************/

            Route::post('job/request/save', [JobRequestController::class, 'saveJobRequest']);
            Route::post('job/request/update', [JobRequestController::class, 'updateJobRequest']);
            Route::post('fetch/single/job/request', [JobRequestController::class, 'getSingleJobRequest']);
            Route::post('delete/job/request', [JobRequestController::class, 'deleteJobRequest']);


                     /************  Quotation Item  ***************/

            Route::post('quotation/item/save', [QuotationItemController::class, 'saveQuotationItem']);
            Route::post('quotation/item/update', [QuotationItemController::class, 'updateQuotationItem']);
            Route::post('fetch/single/quotation/item', [QuotationItemController::class, 'getSingleJobRequest']);
            Route::post('delete/quotation/item', [QuotationItemController::class, 'deleteJobRequest']);



                    /************  Booking Item  ***************/

            Route::post('booking/save', [BookingController::class, 'saveBooking']);
            Route::post('booking/confirm', [BookingController::class, 'saveBookingPending']);
            Route::post('fetch/booking', [BookingController::class, 'getBookingDetail']);
            Route::post('fetch/booking/test', [BookingController::class, 'getBookingDetailTest']);
            Route::post('find/booking', [BookingController::class, 'getSingleBooking']);
            Route::post('start/booking', [BookingController::class, 'startBooking']);
            Route::post('get/inprogress/booking', [BookingController::class, 'getInProgress']);
            Route::post('get/complete/booking', [BookingController::class, 'getCompleteBooking']);
            Route::post('cancel/booking', [BookingController::class, 'cancelBooking']);
            Route::post('complete/booking', [BookingController::class, 'completeBooking']);
            Route::post('reschedule/booking', [BookingController::class, 'rescheduleBooking']);
            Route::post('past/booking', [BookingController::class, 'getPastBooking']);
            Route::post('booking/status', [BookingController::class, 'statusBooking']);
            Route::post('booking/delete', [BookingController::class, 'deleteBooking']);
            Route::post('job/delete', [BookingController::class, 'deleteJob']);
            Route::post('booking/issue/invoice', [BookingController::class, 'issueInvoice']);

                    /************  Job Request  ***************/

                Route::post('booking/job/save', [BookJobRequestController::class, 'saveJobRequest']);
                Route::post('booking/job/update', [BookJobRequestController::class, 'updateJobRequest']);
                Route::post('fetch/single/booking/job', [BookJobRequestController::class, 'getSingleJobRequest']);
                Route::post('delete/booking/job', [BookJobRequestController::class, 'deleteJobRequest']);


                /************  Quotation Item  ***************/

                Route::post('booking/item/save', [BookJobItemController::class, 'saveBookingItem']);
                Route::post('booking/item/update', [BookJobItemController::class, 'updateBookingItem']);
                Route::post('fetch/single/booking/item', [BookJobItemController::class, 'getBookingSingleJobItem']);
                Route::post('delete/booking/item', [BookJobItemController::class, 'deleteBookingItem']);

                        /************  Invoice   ***************/

                Route::post('invoice/fetch', [InvoiceController::class, 'getInvoices']);
                Route::post('get/single/invoice', [InvoiceController::class, 'fetchSingleInvoice']);
                Route::post('send/email/invoice', [InvoiceController::class, 'sendMail']);
                Route::post('send/email/payment', [InvoiceController::class, 'sendPaymentMail']);
                Route::post('get/single/invoice/pdf', [InvoiceController::class, 'fetchInvoicePdf']);
                Route::post('get/single/payment/pdf', [InvoiceController::class, 'fetchPaymentPdf']);
                Route::post('pay/invoice', [InvoiceController::class, 'payInvoice']);
                Route::post('void/invoice', [InvoiceController::class, 'voidInvoice']);


                        /************  Profile Controller   ***************/



                Route::post('fetch/profile', [ProfileController::class, 'getProfile']);
                Route::post('fetch/faq', [ProfileController::class, 'getFAQ']);
                Route::post('fetch/about/and/privacy', [ProfileController::class, 'getOtherSetting']);
                Route::post('profile/update', [ProfileController::class, 'profileUpdate']);

                Route::post('update/token', [ProfileController::class, 'updateToken']);






























    });
});
