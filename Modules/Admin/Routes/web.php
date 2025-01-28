<?php

use Modules\Vender\Entities\Booking;
use Modules\Vender\Entities\Invoice;
use App\Http\Controllers\Intallation;
use Illuminate\Support\Facades\Route;
use Modules\Admin\Entities\WarrantyJob;
use Modules\Vender\Entities\BookingJobItem;
use Modules\Vender\Entities\BookingJobRequest;
use Modules\Admin\Http\Controllers\VatController;
use Modules\Admin\Http\Controllers\CityController;
use Modules\Admin\Http\Controllers\TestController;
use Modules\Admin\Http\Controllers\LoginController;
use Modules\Vender\Entities\QuotationJobItemJobType;
use Modules\Admin\Http\Controllers\HubUserController;
use Modules\Admin\Http\Controllers\FuelTypeController;
use Modules\Admin\Http\Controllers\Admin\JobController;
use Modules\Admin\Http\Controllers\UserGroupController;
use Modules\Admin\Http\Controllers\Admin\UserController;
use Modules\Admin\Http\Controllers\EngineSizeController;
use Modules\Admin\Http\Controllers\Admin\AdminController;
use Modules\Admin\Http\Controllers\ApplicationController;
use Modules\Admin\Http\Controllers\WarrentyJobController;
use Modules\Admin\Http\Controllers\RegistrationController;
use Modules\Admin\Http\Controllers\AccreditationController;
use Modules\Admin\Http\Controllers\Admin\JobTypeController;
use Modules\Admin\Http\Controllers\Admin\PackageController;
use Modules\Admin\Http\Controllers\Admin\ServiceController;
use Modules\Admin\Http\Controllers\Admin\SettingController;
use Modules\Admin\Http\Controllers\PaymentMethodController;
use Modules\Admin\Http\Controllers\ReferneceDataController;
use Modules\Admin\Http\Controllers\VehicleColuorController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use Modules\Admin\Http\Controllers\Admin\CarMakerController;
use Modules\Admin\Http\Controllers\Admin\CarModelController;
use Modules\Admin\Http\Controllers\Admin\WithdrawController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Modules\Admin\Http\Controllers\ServiceOfferingController;
use Modules\Admin\Http\Controllers\Admin\SubscriberController;
use Modules\Admin\Http\Controllers\TransmissionTypeController;
use Modules\Admin\Http\Controllers\VehicleSpecialistController;
use Modules\Admin\Http\Controllers\Admin\JobPriceTypeController;

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

Route::get('/check', function () {

    Booking::orderBy('id','desc')->delete();
    Invoice::orderBy('id','desc')->delete();
    BookingJobItem::orderBy('id','desc')->delete();
    BookingJobRequest::orderBy('id','desc')->delete();

    return view('check');

    return QuotationJobItemJobType::where('job_item_id',7)->get();
});


Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'store'])->name('login');
Route::get('/admin/recover', [LoginController::class, 'recover'])->name('admin.recover');
Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::group(['middleware' => 'auth:admin'], function () {
    Route::prefix('admin')->group(function () {

        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');


          /********  Registration ********/

          Route::prefix('registration')->group(function () {


            Route::get('/prospects', [RegistrationController::class, 'prospects'])->name('admin.prospects');

            Route::get('/interests', [RegistrationController::class, 'interests'])->name('admin.interests');

            Route::get('/application', [ApplicationController::class, 'application'])->name('admin.application');

            Route::get('/register', [RegistrationController::class, 'register'])->name('admin.register');
            Route::get('/register/detail/{id}', [RegistrationController::class, 'registerDetail'])->name('admin.register.detail');
            Route::get('/register/inactive/{id}', [RegistrationController::class, 'registerInActive'])->name('admin.register.in.active');
            Route::get('/register/active/{id}', [RegistrationController::class, 'registerActive'])->name('admin.register.active');



            Route::get('/interests/detail/{id}', [RegistrationController::class, 'interestDetail'])->name('admin.interests.detail');
            Route::get('/interests/business/detail/{id}', [RegistrationController::class, 'interestBusinessDetail'])->name('admin.interests.business.detail');
            Route::get('/interests/contact/detail/{id}', [RegistrationController::class, 'interestContactDetail'])->name('admin.interests.contact.detail');

            Route::get('/interests/accept/{id}', [RegistrationController::class, 'interestAccept'])->name('admin.interests.accept');
            Route::get('/interests/decline/{id}', [RegistrationController::class, 'interestDecline'])->name('admin.interests.decline');


            Route::get('/application/detail/{id}', [ApplicationController::class, 'applicationDetail'])->name('admin.application.detail');
            Route::get('/application/info/{id}', [ApplicationController::class, 'applicationInfo'])->name('admin.application.info');

            Route::get('/application/business/info/{id}', [ApplicationController::class, 'businessInfo'])->name('admin.business.info');
            Route::get('/application/business/info/verify/{id}', [ApplicationController::class, 'businessInfoVerify'])->name('admin.business.info.verify');
            Route::get('/application/verify/{id}', [ApplicationController::class, 'businessVerify'])->name('admin.business.verify');
            Route::get('/applications/decline/{id}', [ApplicationController::class, 'businessDecline'])->name('admin.business.decline');

            Route::get('/application/vat/{id}', [ApplicationController::class, 'vatInfo'])->name('admin.vat.info');
            Route::get('/application/vat/verify/{id}', [ApplicationController::class, 'vatInfoVerify'])->name('admin.vat.info.verify');
            Route::get('/application/vat/verified/{id}', [ApplicationController::class, 'vatVerify'])->name('admin.vat.verify');
            Route::get('/application/vat/decline/{id}', [ApplicationController::class, 'vatDecline'])->name('admin.vat.decline');


            Route::get('/application/trading/name/{id}', [ApplicationController::class, 'tradingInfo'])->name('admin.trading.info');
            Route::get('/application/trading/name/verify/{id}', [ApplicationController::class, 'tradingInfoVerify'])->name('admin.trading.info.verify');
            Route::get('/application/trading/name/verified/{id}', [ApplicationController::class, 'tradingVerify'])->name('admin.trading.verify');
            Route::get('/application/trading/name/decline/{id}', [ApplicationController::class, 'tradingDecline'])->name('admin.trading.decline');

            Route::get('/application/business/activities/{id}', [ApplicationController::class, 'businessActivityInfo'])->name('admin.business.activity.info');
            Route::get('/application/business/activities/verify/{id}', [ApplicationController::class, 'businessActivityInfoVerify'])->name('admin.business.activity.info.verify');
            Route::get('/application/business/activities/verified/{id}', [ApplicationController::class, 'businessActivityVerify'])->name('admin.business.activity.verify');
            Route::get('/application/business/activities/decline/{id}', [ApplicationController::class, 'businessActivityDecline'])->name('admin.business.activity.decline');

            Route::get('/application/trade/unit/{id}', [ApplicationController::class, 'TradeUnitInfo'])->name('admin.trade.unit.info');
            Route::get('/application/trade/unit/verify/{id}', [ApplicationController::class, 'TradeUnitInfoVerify'])->name('admin.trade.unit.info.verify');
            Route::get('/application/trade/unit/verified/{id}', [ApplicationController::class, 'TradeUnitVerify'])->name('admin.trade.unit.verify');
            Route::get('/application/trade/unit/decline/{id}', [ApplicationController::class, 'TradeUnitDecline'])->name('admin.trade.unit.decline');

            Route::get('/application/main/account/{id}', [ApplicationController::class, 'MainAccountInfo'])->name('admin.main.account.info');
            Route::get('/application/main/account/verify/{id}', [ApplicationController::class, 'MainAccountInfoVerify'])->name('admin.main.account.info.verify');
            Route::get('/application/main/account/verified/{id}', [ApplicationController::class, 'MainAccountVerify'])->name('admin.main.account.verify');
            Route::get('/application/main/account/decline/{id}', [ApplicationController::class, 'MainAccountDecline'])->name('admin.main.account.decline');

            Route::get('/application/subscription/{id}', [ApplicationController::class, 'SubscriptionInfo'])->name('admin.subscription.info');
            Route::get('/application/subscription/verify/{id}', [ApplicationController::class, 'SubscriptionInfoVerify'])->name('admin.subscription.info.verify');
            Route::get('/application/subscription/verified/{id}', [ApplicationController::class, 'SubscriptionVerify'])->name('admin.subscription.verify');
            Route::get('/application/subscription/decline/{id}', [ApplicationController::class, 'SubscriptionDecline'])->name('admin.subscription.decline');

            Route::get('/application/bank/{id}', [ApplicationController::class, 'bankInfo'])->name('admin.bank.info');
            Route::get('/application/bank/verify/{id}', [ApplicationController::class, 'bankInfoVerify'])->name('admin.bank.info.verify');
            Route::get('/application/bank/verified/{id}', [ApplicationController::class, 'bankVerify'])->name('admin.bank.verify');
            Route::get('/application/bank/decline/{id}', [ApplicationController::class, 'bankDecline'])->name('admin.bank.decline');

            Route::get('/application/accept/{id}', [ApplicationController::class, 'applicationAccept'])->name('admin.application.accept');
            Route::get('/application/decline/{id}', [ApplicationController::class, 'applicationDecline'])->name('admin.application.decline');



        });

        /********  Packages ********/

            Route::prefix('packages')->group(function () {

                Route::get('/', [PackageController::class, 'index'])->name('admin.packages');
                Route::get('/add', [PackageController::class, 'add'])->name('admin.package.add');
                Route::post('/store', [PackageController::class, 'store'])->name('admin.package.store');
                Route::post('/update', [PackageController::class, 'update'])->name('admin.package.update');
                Route::get('/edit/{id}', [PackageController::class, 'edit'])->name('admin.package.edit');
                Route::get('/destroy/{id}', [PackageController::class, 'destroy'])->name('admin.package.destroy');
            });
            Route::get('/product', [PackageController::class, 'packageProducts'])->name('admin.products');

            Route::get('/reference/data', [ReferneceDataController::class, 'index'])->name('admin.ref.data');

        /******** End  Packages ********/

        /********  Job Type ********/

            Route::prefix('reference/data')->group(function () {
                Route::prefix('job/type')->group(function () {

                    Route::get('/', [JobTypeController::class, 'index'])->name('admin.job.type');
                    Route::get('/add', [JobTypeController::class, 'add'])->name('admin.job.type.add');
                    Route::get('/edit/{id}', [JobTypeController::class, 'edit'])->name('admin.job.type.edit');
                    Route::post('/store', [JobTypeController::class, 'store'])->name('admin.job.type.store');
                    Route::post('/update', [JobTypeController::class, 'update'])->name('admin.job.type.update');
                    Route::get('/destroy/{id}', [JobTypeController::class, 'delete'])->name('admin.job.type.destroy');

                });

                Route::prefix('price/type')->group(function () {

                    Route::get('/', [JobPriceTypeController::class, 'index'])->name('admin.job.price');
                    Route::get('/add', [JobPriceTypeController::class, 'add'])->name('admin.job.price.add');
                    Route::get('/edit/{id}', [JobPriceTypeController::class, 'edit'])->name('admin.job.price.edit');
                    Route::post('/store', [JobPriceTypeController::class, 'store'])->name('admin.job.price.store');
                    Route::post('/update', [JobPriceTypeController::class, 'update'])->name('admin.job.price.update');
                    Route::get('/destroy/{id}', [JobPriceTypeController::class, 'delete'])->name('admin.job.price.destroy');
                });

                Route::prefix('services')->group(function () {

                    Route::get('/', [ServiceController::class, 'index'])->name('admin.services');
                    Route::get('/add', [ServiceController::class, 'add'])->name('admin.service.add');
                    Route::get('/edit/{id}', [ServiceController::class, 'edit']);
                    Route::post('/store', [ServiceController::class, 'store'])->name('admin.service.store');
                    Route::post('/update', [ServiceController::class, 'update'])->name('admin.service.update');
                    Route::get('/destroy/{id}', [ServiceController::class, 'destroy'])->name('admin.service.destroy');
                });


        Route::prefix('vehicle')->group(function () {

            // Car Maker

            Route::get('/makers', [CarMakerController::class, 'index'])->name('admin.makers');
            Route::get('/makers/add', [CarMakerController::class, 'add'])->name('admin.makers.add');
            Route::get('/makers/edit/{id?}', [CarMakerController::class, 'edit'])->name('admin.makers.edit');
            Route::post('/makers/store', [CarMakerController::class, 'store'])->name('admin.makers.store');
            Route::post('/makers/update', [CarMakerController::class, 'update'])->name('admin.makers.update');
            Route::get('/makers/destroy/{id}', [CarMakerController::class, 'destroy'])->name('admin.makers.destroy');


            // Car Modal

            Route::get('/models', [CarModelController::class, 'index'])->name('admin.models');
            Route::get('/models/add', [CarModelController::class, 'add'])->name('admin.models.add');
            Route::get('/models/edit/{id?}', [CarModelController::class, 'edit'])->name('admin.models.edit');
            Route::post('/models/store', [CarModelController::class, 'store'])->name('admin.models.store');
            Route::post('/models/update', [CarModelController::class, 'update'])->name('admin.models.update');
             Route::get('/models/destroy/{id}', [CarModelController::class, 'destroy'])->name('admin.models.destroy');

             Route::get('/color', [VehicleColuorController::class, 'index'])->name('admin.color');
            Route::get('/color/add', [VehicleColuorController::class, 'add'])->name('admin.color.add');
            Route::get('/color/edit/{id?}', [VehicleColuorController::class, 'edit'])->name('admin.color.edit');
            Route::post('/color/store', [VehicleColuorController::class, 'store'])->name('admin.color.store');
            Route::post('/color/update', [VehicleColuorController::class, 'update'])->name('admin.color.update');
             Route::get('/color/destroy/{id}', [VehicleColuorController::class, 'destroy'])->name('admin.color.destroy');




        });

        Route::get('/engine/size', [EngineSizeController::class, 'index'])->name('admin.engine.size');
        Route::get('/engine/size/add', [EngineSizeController::class, 'add'])->name('admin.engine.size.add');
        Route::get('/engine/size/edit/{id?}', [EngineSizeController::class, 'edit'])->name('admin.engine.size.edit');
        Route::post('/engine/size/store', [EngineSizeController::class, 'store'])->name('admin.engine.size.store');
        Route::post('/engine/size/update', [EngineSizeController::class, 'update'])->name('admin.engine.size.update');
         Route::get('/engine/size/destroy/{id}', [EngineSizeController::class, 'destroy'])->name('admin.engine.size.destroy');

         Route::get('/fuel/type', [FuelTypeController::class, 'index'])->name('admin.fuel.type');
        Route::get('/fuel/type/add', [FuelTypeController::class, 'add'])->name('admin.fuel.type.add');
        Route::get('/fuel/type/edit/{id?}', [FuelTypeController::class, 'edit'])->name('admin.fuel.type.edit');
        Route::post('/fuel/type/store', [FuelTypeController::class, 'store'])->name('admin.fuel.type.store');
        Route::post('/fuel/type/update', [FuelTypeController::class, 'update'])->name('admin.fuel.type.update');
         Route::get('/fuel/type/destroy/{id}', [FuelTypeController::class, 'destroy'])->name('admin.fuel.type.destroy');

         Route::get('/payment/method', [PaymentMethodController::class, 'index'])->name('admin.payment.method');
        Route::get('/payment/method/add', [PaymentMethodController::class, 'add'])->name('admin.payment.method.add');
        Route::get('/payment/method/edit/{id?}', [PaymentMethodController::class, 'edit'])->name('admin.payment.method.edit');
        Route::post('/payment/method/store', [PaymentMethodController::class, 'store'])->name('admin.payment.method.store');
        Route::post('/payment/method/update', [PaymentMethodController::class, 'update'])->name('admin.payment.method.update');
         Route::get('/payment/method/destroy/{id}', [PaymentMethodController::class, 'destroy'])->name('admin.payment.method.destroy');

         Route::get('/service/offering', [ServiceOfferingController::class, 'index'])->name('admin.service.offering');
        Route::get('/service/offering/add', [ServiceOfferingController::class, 'add'])->name('admin.service.offering.add');
        Route::get('/service/offering/edit/{id?}', [ServiceOfferingController::class, 'edit'])->name('admin.service.offering.edit');
        Route::post('/service/offering/store', [ServiceOfferingController::class, 'store'])->name('admin.service.offering.store');
        Route::post('/service/offering/update', [ServiceOfferingController::class, 'update'])->name('admin.service.offering.update');
         Route::get('/service/offering/destroy/{id}', [ServiceOfferingController::class, 'destroy'])->name('admin.service.offering.destroy');

         Route::get('/transmission/type', [TransmissionTypeController::class, 'index'])->name('admin.trans.type');
         Route::get('/transmission/type/add', [TransmissionTypeController::class, 'add'])->name('admin.trans.type.add');
         Route::get('/transmission/type/edit/{id?}', [TransmissionTypeController::class, 'edit'])->name('admin.trans.type.edit');
         Route::post('/transmission/type/store', [TransmissionTypeController::class, 'store'])->name('admin.trans.type.store');
         Route::post('/transmission/type/update', [TransmissionTypeController::class, 'update'])->name('admin.trans.type.update');
         Route::get('/transmission/type/destroy/{id}', [TransmissionTypeController::class, 'destroy'])->name('admin.trans.type.destroy');

         Route::get('/vat/rate', [VatController::class, 'index'])->name('admin.vat.rate');
         Route::get('/vat/rate/add', [VatController::class, 'add'])->name('admin.vat.rate.add');
         Route::get('/vat/rate/edit/{id?}', [VatController::class, 'edit'])->name('admin.vat.rate.edit');
         Route::post('/vat/rate/store', [VatController::class, 'store'])->name('admin.vat.rate.store');
         Route::post('/vat/rate/update', [VatController::class, 'update'])->name('admin.vat.rate.update');
         Route::get('/vat/rate/destroy/{id}', [VatController::class, 'destroy'])->name('admin.vat.rate.destroy');

         Route::get('/city', [CityController::class, 'index'])->name('admin.city');
        Route::get('/city/add', [CityController::class, 'add'])->name('admin.city.add');
        Route::get('/city/edit/{id?}', [CityController::class, 'edit'])->name('admin.city.edit');
        Route::post('/city/store', [CityController::class, 'store'])->name('admin.city.store');
        Route::post('/city/update', [CityController::class, 'update'])->name('admin.city.update');
         Route::get('/city/destroy/{id}', [CityController::class, 'destroy'])->name('admin.city.destroy');


        Route::prefix('warranty/job')->group(function () {

            Route::get('/', [WarrentyJobController::class, 'index'])->name('admin.warranty.job');
            Route::get('/add', [WarrentyJobController::class, 'create'])->name('admin.warranty.job.add');
            Route::get('/edit/{id}', [WarrentyJobController::class, 'edit'])->name('admin.warranty.job.edit');
            Route::post('/store', [WarrentyJobController::class, 'store'])->name('admin.warranty.job.store');
            Route::post('/update', [WarrentyJobController::class, 'update'])->name('admin.warranty.job.update');
            Route::get('/destroy/{id}', [WarrentyJobController::class, 'destroy'])->name('admin.warranty.job.destroy');
        });



        /******** End  Warranty Job ********/

        /********  Warranty Job ********/

        Route::prefix('vehicle/specialist')->group(function () {

            Route::get('/', [VehicleSpecialistController::class, 'index'])->name('admin.vehicle.specialist');
            Route::get('/add', [VehicleSpecialistController::class, 'create'])->name('admin.vehicle.specialist.add');
            Route::get('/edit/{id}', [VehicleSpecialistController::class, 'edit'])->name('admin.vehicle.specialist.edit');
            Route::post('/store', [VehicleSpecialistController::class, 'store'])->name('admin.vehicle.specialist.store');
            Route::post('/update', [VehicleSpecialistController::class, 'update'])->name('admin.vehicle.specialist.update');
            Route::get('/destroy/{id}', [VehicleSpecialistController::class, 'destroy'])->name('admin.vehicle.specialist.destroy');
        });



        /******** End  Warranty Job ********/

        /******** Accreditation ********/

        Route::prefix('accreditation')->group(function () {

            Route::get('/', [AccreditationController::class, 'index'])->name('admin.accreditation');
            Route::get('/add', [AccreditationController::class, 'create'])->name('admin.accreditation.add');
            Route::get('/edit/{id}', [AccreditationController::class, 'edit'])->name('admin.accreditation.edit');
            Route::post('/store', [AccreditationController::class, 'store'])->name('admin.accreditation.store');
            Route::post('/update', [AccreditationController::class, 'update'])->name('admin.accreditation.update');
            Route::get('/destroy/{id}', [AccreditationController::class, 'destroy'])->name('admin.accreditation.destroy');
        });

            });










        /******** End   Car Service ********/


        /******** Subscriber ********/

            Route::prefix('subscribers')->group(function () {


                Route::get('/', [SubscriberController::class, 'index'])->name('admin.subscribers');
                Route::get('/detail/{id}', [SubscriberController::class, 'subscriptionDetail'])->name('admin.subscription.detail');
                Route::get('/view/{id?}', [SubscriberController::class, 'viewSubscriber'])->name('admin.subscribers.view');
                Route::get('/approve/{id?}', [SubscriberController::class, 'approve'])->name('admin.subscribers.approve');
                Route::get('/un/approve/{id?}', [SubscriberController::class, 'unapprove'])->name('admin.subscribers.un_approve');


            });
            Route::get('/invoice', [SubscriberController::class, 'invoice'])->name('admin.invoice');
            Route::get('/invoice/detail/{id}', [SubscriberController::class, 'invoiceDetail'])->name('admin.invoice.detail');
            Route::get('/payments', [SubscriberController::class, 'payments'])->name('admin.payments');
            Route::get('/payment/detail/{id}', [SubscriberController::class, 'paymentDetail'])->name('admin.payments.detail');

         /******** End Subscriber ********/
        /******** Subscriber ********/

        Route::prefix('vender')->group(function () {


            Route::get('/', [SubscriberController::class, 'newVender'])->name('admin.vender');
        });

        /******** End Subscriber ********/

        /******** Job ********/

        Route::prefix('jobs')->group(function () {


            Route::get('/', [JobController::class, 'index'])->name('admin.jobs');
            Route::get('/print/{id?}', [JobController::class, 'printJob'])->name('admin.print.job');

        });

        /******** End Job ********/


        Route::prefix('hub/users')->group(function () {


            Route::get('/', [HubUserController::class, 'index'])->name('admin.hub.users');
            Route::get('/add', [HubUserController::class, 'add'])->name('admin.hub.user.add');
            Route::post('/store', [HubUserController::class, 'store'])->name('admin.hub.user.store');
            Route::post('/update', [HubUserController::class, 'update'])->name('admin.hub.user.update');
            Route::get('/edit/{id}', [HubUserController::class, 'edit'])->name('admin.hub.user.edit');
            Route::get('/view/{id}', [HubUserController::class, 'view'])->name('admin.hub.user.view');
            Route::get('/suspend/user/{id}', [HubUserController::class, 'userSuspend'])->name('admin.hub.user.suspend');
            Route::get('/active/user/{id}', [HubUserController::class, 'userActive'])->name('admin.hub.user.active');
            Route::get('/in/active/user/{id}', [HubUserController::class, 'userInActive'])->name('admin.hub.user.in.active');
            Route::get('/user/password/{id}', [HubUserController::class, 'password'])->name('admin.hub.user.password');
            Route::get('/app/data/{id}', [HubUserController::class, 'appData'])->name('admin.hub.user.app.data');
            Route::post('/user/password/update', [HubUserController::class, 'passwordChange'])->name('admin.hub.password.update');

            Route::get('/app/data/vehicles/{id}', [HubUserController::class, 'appDataVehicle'])->name('admin.hub.user.app.data.vehicle');
            Route::get('/app/data/vehicle/detail/{id}/{vehicle_id}', [HubUserController::class, 'appDataVehicleDetail'])->name('admin.hub.user.app.data.vehicle.detail');

            Route::get('/app/data/quote/{id}', [HubUserController::class, 'appDataQuote'])->name('admin.hub.user.app.data.quote');
            Route::get('/app/data/quote/detail/{id}/{quote_id}', [HubUserController::class, 'appDataQuoteDetail'])->name('admin.hub.user.app.data.quote.detail');

            Route::get('/app/data/booking/{id}', [HubUserController::class, 'appDataBooking'])->name('admin.hub.user.app.data.booking');
            Route::get('/app/data/booking/detail/{id}/{booking_id}', [HubUserController::class, 'appDataBookingDetail'])->name('admin.hub.user.app.data.booking.detail');

            Route::get('/app/data/job/{id}', [HubUserController::class, 'appDataJob'])->name('admin.hub.user.app.data.job');
            Route::get('/app/data/job/detail/{id}/{job_id}', [HubUserController::class, 'appDataJobDetail'])->name('admin.hub.user.app.data.job.detail');

            Route::get('/app/data/invoice/{id}', [HubUserController::class, 'appDataInvoice'])->name('admin.hub.user.app.data.invoice');
            Route::get('/app/data/invoice/detail/{id}/{job_id}', [HubUserController::class, 'appDataInvoiceDetail'])->name('admin.hub.user.app.data.invoice.detail');

        });

        /******** Client ********/

        Route::prefix('users')->group(function () {


            Route::get('/', [UserController::class, 'index'])->name('admin.users');
            Route::get('/add', [UserController::class, 'add'])->name('admin.user.add');
            Route::post('/store', [UserController::class, 'store'])->name('admin.user.store');
            Route::post('/update', [UserController::class, 'update'])->name('admin.user.update');
            Route::get('/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
            Route::get('/view/{id}', [UserController::class, 'view'])->name('admin.user.view');
            Route::get('/suspend/user/{id}', [UserController::class, 'userSuspend'])->name('admin.user.suspend');
            Route::get('/active/user/{id}', [UserController::class, 'userActive'])->name('admin.user.active');
            Route::get('/in/active/user/{id}', [UserController::class, 'userInActive'])->name('admin.user.in.active');
            Route::get('/user/password/{id}', [UserController::class, 'password'])->name('admin.user.password');
            Route::post('/user/password/update', [UserController::class, 'passwordChange'])->name('admin.password.update');
        });

        Route::get('user/group', [UserGroupController::class, 'userGroup'])->name('admin.user.group');
        Route::get('user/group/view/{id}', [UserGroupController::class, 'userGroupView'])->name('admin.user.group.view');
        Route::get('user/group/edit/{id}', [UserGroupController::class, 'userGroupEdit'])->name('admin.user.group.edit');
        Route::get('user/group/add', [UserGroupController::class, 'addUserGroup'])->name('admin.user.group.add');
        Route::post('user/group/store', [UserGroupController::class, 'storeUserGroup'])->name('admin.user.group.store');
        Route::post('user/group/update', [UserGroupController::class, 'updateUserGroup'])->name('admin.user.group.update');

        /******** End Client ********/

        /******** Withdraw Request ********/

            Route::prefix('withdraw/requests')->group(function () {

            Route::get('/', [WithdrawController::class, 'index'])->name('admin.withdraws');
            Route::get('/edit', [WithdrawController::class, 'edit'])->name('admin.withdraw_request.edit');
            Route::get('/view', [WithdrawController::class, 'view'])->name('admin.withdraw_request.view');



            });



        /******** End Withdraw Request ********/

        /******** Setting ********/

            Route::prefix('settings')->group(function () {

            Route::get('/admin/profile', [SettingController::class, 'admin_profile'])->name('admin.profile');
            Route::post('/admin/profile/update', [SettingController::class, 'admin_profile_update'])->name('admin.profile.update');

            Route::get('/', [SettingController::class, 'index'])->name('admin.settings');
            Route::post('/store', [SettingController::class, 'insert'])->name('admin.settings.store');




            });







        /******** End Setting ********/

        /********  Warranty Job ********/




        /******** End  Warranty Job ********/





    });
});



Route::group(['middleware' => 'auth:user'], function () {
    // routes under the writer
});
