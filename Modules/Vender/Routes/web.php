<?php

use Modules\Vender\Http\Controllers\JobController;
use Modules\Vender\Http\Controllers\SiteController;
use Modules\Vender\Http\Controllers\TeamController;
use Modules\Vender\Http\Controllers\UserController;
use Modules\Vender\Http\Controllers\ClientController;
use Modules\Vender\Http\Controllers\QuotesController;
use Modules\Vender\Http\Controllers\VenderController;
use Modules\Vender\Http\Controllers\AppDataController;
use Modules\Vender\Http\Controllers\BookingController;
use Modules\Vender\Http\Controllers\EarningController;
use Modules\Vender\Http\Controllers\InvoiceController;
use Modules\Vender\Http\Controllers\SettingController;
use Modules\Vender\Http\Controllers\BusinessController;
use Modules\Vender\Http\Controllers\UserGroupController;
use Modules\Vender\Http\Controllers\MainContactController;
use Modules\Vender\Http\Controllers\TradingUnitController;
use Modules\Vender\Http\Controllers\QuickProductController;
use Modules\Vender\Http\Controllers\SubscriptionController;
use Modules\Vender\Http\Controllers\ServiceProviderController;
use Modules\Vender\Http\Controllers\ServiceProviderGroupController;
use Modules\Vender\Http\Controllers\ServiceProviderHubSettingController;
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

    // routes under the writer

Route::name('vender.')->middleware('auth:web')->group(function () {

    Route::get('vender', [VenderController::class, 'index'])->name('index');

    // Business Route

    Route::get('vender/business/detail', [BusinessController::class, 'businessDetail'])->name('business.detail');
    Route::get('vender/business/information', [BusinessController::class, 'businessInformation'])->name('business.information');
    Route::get('vender/business/vat', [BusinessController::class, 'businessVAT'])->name('business.vat');

    Route::get('vender/main/contact', [MainContactController::class, 'mainContact'])->name('main.contact');
    Route::get('vender/main/contact/view/{id}', [MainContactController::class, 'mainContactView'])->name('main.contact.view');
    Route::get('vender/main/contact/edit/{id}', [MainContactController::class, 'mainContactEdit'])->name('main.contact.edit');
    Route::get('vender/main/contact/add', [MainContactController::class, 'addMainContact'])->name('main.contact.add');
    Route::post('vender/main/contact/store', [MainContactController::class, 'storeMainContact'])->name('main.contact.store');
    Route::post('vender/main/contact/update', [MainContactController::class, 'updateMainContact'])->name('main.contact.update');

    Route::get('vender/trading/name', [TradingUnitController::class, 'tradingName'])->name('trading.name');
    Route::get('vender/trading/name/view/{id}', [TradingUnitController::class, 'tradingNameView'])->name('trading.name.view');
    Route::get('vender/trading/name/edit/{id}', [TradingUnitController::class, 'tradingNameEdit'])->name('trading.name.edit');
    Route::get('vender/trading/name/add', [TradingUnitController::class, 'addTradingName'])->name('trading.name.add');
    Route::post('vender/trading/name/store', [TradingUnitController::class, 'storeTradingName'])->name('trading.name.store');
    Route::post('vender/trading/name/update', [TradingUnitController::class, 'updateTradingName'])->name('trading.name.update');

    Route::get('vender/sites', [SiteController::class, 'site'])->name('site');
    Route::get('vender/sites/view/{id}', [SiteController::class, 'SiteView'])->name('site.view');
    Route::get('vender/sites/edit/{id}', [SiteController::class, 'SiteEdit'])->name('site.edit');
    Route::get('vender/sites/add', [SiteController::class, 'addSite'])->name('site.add');
    Route::post('vender/sites/store', [SiteController::class, 'storeSite'])->name('site.store');
    Route::post('vender/sites/update', [SiteController::class, 'updateSite'])->name('site.update');

    Route::get('vender/user', [UserController::class, 'user'])->name('user');
    Route::get('vender/user/view/{id}', [UserController::class, 'userView'])->name('user.view');
    Route::get('vender/user/information/{id}', [UserController::class, 'userInformation'])->name('user.information');
    Route::get('vender/user/edit/{id}', [UserController::class, 'userEdit'])->name('user.edit');
    Route::get('vender/user/add', [UserController::class, 'addUser'])->name('user.add');
    Route::post('vender/user/store', [UserController::class, 'storeUser'])->name('user.store');
    Route::post('vender/user/update', [UserController::class, 'updateUser'])->name('user.update');
    Route::post('vender/password/update', [UserController::class, 'passwordChange'])->name('user.password.update');
    Route::get('vender/user/password/{id}', [UserController::class, 'userPassword'])->name('user.password');

    Route::get('vender/suspend/user/{id}', [UserController::class, 'userSuspend'])->name('user.suspend');
    Route::get('vender/active/user/{id}', [UserController::class, 'userActive'])->name('user.active');
    Route::get('vender/inactive/user/{id}', [UserController::class, 'userInActive'])->name('user.in.active');


    Route::get('vender/user/app/{id}', [UserController::class, 'userApp'])->name('user.app');
    Route::get('vender/app/view/{id}', [UserController::class, 'userAppView'])->name('user.app.view');
    Route::get('vender/app/edit/{id}', [UserController::class, 'userAppEdit'])->name('user.app.edit');
    Route::post('vender/app/update', [UserController::class, 'userAppUpdate'])->name('user.app.update');

    Route::get('vender/app/settings', [UserGroupController::class, 'appSetting'])->name('app.setting');
    Route::get('vender/user/group', [UserGroupController::class, 'userGroup'])->name('user.group');
    Route::get('vender/user/group/view/{id}', [UserGroupController::class, 'userGroupView'])->name('user.group.view');
    Route::get('vender/user/group/edit/{id}', [UserGroupController::class, 'userGroupEdit'])->name('user.group.edit');
    Route::get('vender/user/group/add', [UserGroupController::class, 'addUserGroup'])->name('user.group.add');
    Route::post('vender/user/group/store', [UserGroupController::class, 'storeUserGroup'])->name('user.group.store');
    Route::post('vender/user/group/update', [UserGroupController::class, 'updateUserGroup'])->name('user.group.update');


    Route::get('vender/service/provider', [ServiceProviderController::class, 'serviceProvider'])->name('service.provider');
    Route::get('vender/service/provider/app/data', [ServiceProviderController::class, 'appData'])->name('service.provider.app.data');

    Route::get('vender/service/provider/trading/unit', [ServiceProviderController::class, 'tradingUnit'])->name('service.provider.trading.unit');
    Route::get('vender/service/provider/trading/unit/add', [ServiceProviderController::class, 'tradingUnitAdd'])->name('service.provider.trading.unit.add');
    Route::get('vender/service/provider/trading/unit/edit/{id}', [ServiceProviderController::class, 'tradingUnitEdit'])->name('service.provider.trading.unit.edit');
    Route::post('vender/service/provider/trading/unit/store', [ServiceProviderController::class, 'tradingUnitStore'])->name('service.provider.trading.unit.store');
    Route::post('vender/service/provider/trading/unit/update', [ServiceProviderController::class, 'tradingUnitUpdate'])->name('service.provider.trading.unit.update');
    Route::get('vender/service/provider/trading/unit/view/{id}', [ServiceProviderController::class, 'tradingUnitView'])->name('service.provider.trading.unit.view');

    Route::get('vender/service/provider/trading/unit/booking/setting/{id}', [ServiceProviderController::class, 'bookingSetting'])->name('service.provider.trading.unit.booking.setting');
    Route::post('vender/service/provider/trading/unit/booking/setting', [ServiceProviderController::class, 'bookingSettingSubmit'])->name('service.provider.trading.unit.booking.setting.submit');

    Route::get('vender/service/provider/trading/unit/invoice/setting/{id}', [ServiceProviderController::class, 'invoiceSetting'])->name('service.provider.trading.unit.invoice.setting');
    Route::post('vender/service/provider/trading/unit/invoice/setting', [ServiceProviderController::class, 'invoiceSettingSubmit'])->name('service.provider.trading.unit.invoice.setting.submit');

    Route::get('vender/service/provider/trading/unit/vat/setting/{id}', [ServiceProviderController::class, 'vatSetting'])->name('service.provider.trading.unit.vat.setting');
    Route::post('vender/service/provider/trading/unit/vat/setting', [ServiceProviderController::class, 'vatSettingSubmit'])->name('service.provider.trading.unit.vat.setting.submit');

    Route::get('vender/service/provider/trading/unit/active/{id}', [ServiceProviderController::class, 'tradingUnitActive'])->name('service.provider.trading.unit.active');
    Route::get('vender/service/provider/trading/unit/in/active/{id}', [ServiceProviderController::class, 'tradingUnitInActive'])->name('service.provider.trading.unit.in.active');

    Route::get('vender/service/provider/trading/unit/online/{id}', [ServiceProviderController::class, 'tradingUnitOnLine'])->name('service.provider.trading.unit.Online');
    Route::get('vender/service/provider/trading/unit/offline/{id}', [ServiceProviderController::class, 'tradingUnitOffLine'])->name('service.provider.trading.unit.offline');

    Route::get('vender/service/provider/trading/unit/app/setting/{id}', [ServiceProviderController::class, 'appSetting'])->name('service.provider.trading.unit.app.setting');
    Route::get('vender/service/provider/trading/unit/app/data/{id}', [ServiceProviderController::class, 'appTradingData'])->name('service.provider.trading.unit.app.data');
    Route::get('vender/service/provider/trading/unit/hub/setting/{id}', [ServiceProviderController::class, 'hubSetting'])->name('service.provider.trading.unit.hub.setting');

    Route::get('vender/service/provider/trading/unit/hub/setting/online/status/{id}', [ServiceProviderHubSettingController::class, 'onlineStatus'])->name('service.provider.trading.unit.hub.setting.online.status');
    Route::post('vender/service/provider/trading/unit/hub/setting/online/status', [ServiceProviderHubSettingController::class, 'onlineStatusSubmit'])->name('service.provider.trading.unit.hub.setting.online.status.submit');
    Route::get('vender/service/provider/trading/unit/hub/setting/edit/opening/hour/{id}', [ServiceProviderHubSettingController::class, 'openingHour'])->name('service.provider.trading.unit.hub.setting.opening.hour');
    Route::post('vender/service/provider/trading/unit/hub/setting/edit/opening/hour', [ServiceProviderHubSettingController::class, 'openingHourSubmit'])->name('service.provider.trading.unit.hub.setting.opening.hour.submit');

    Route::get('vender/service/provider/trading/unit/hub/setting/edit/social/media/{id}', [ServiceProviderHubSettingController::class, 'socialMedia'])->name('service.provider.trading.unit.hub.setting.social.media');
    Route::post('vender/service/provider/trading/unit/hub/setting/edit/social/media', [ServiceProviderHubSettingController::class, 'socialMediaSubmit'])->name('service.provider.trading.unit.hub.setting.social.media.submit');

    Route::get('vender/service/provider/trading/unit/hub/setting/edit/job/types/{id}', [ServiceProviderHubSettingController::class, 'jobTypes'])->name('service.provider.trading.unit.hub.setting.job.type');
    Route::post('vender/service/provider/trading/unit/hub/setting/edit/job/types', [ServiceProviderHubSettingController::class, 'jobTypesSubmit'])->name('service.provider.trading.unit.hub.setting.job.type.submit');

    Route::get('vender/service/provider/trading/unit/hub/setting/edit/warranty/job/{id}', [ServiceProviderHubSettingController::class, 'warrantyJob'])->name('service.provider.trading.unit.hub.setting.warranty.job');
    Route::post('vender/service/provider/trading/unit/hub/setting/edit/warranty/job', [ServiceProviderHubSettingController::class, 'warrantyJobSubmit'])->name('service.provider.trading.unit.hub.setting.warranty.job.submit');

    Route::get('vender/service/provider/trading/unit/hub/setting/edit/vehicle/specialist/{id}', [ServiceProviderHubSettingController::class, 'vehicleSpecialist'])->name('service.provider.trading.unit.hub.setting.vehicle.specialist');
    Route::post('vender/service/provider/trading/unit/hub/setting/edit/vehicle/specialist', [ServiceProviderHubSettingController::class, 'vehicleSpecialistSubmit'])->name('service.provider.trading.unit.hub.setting.vehicle.specialist.submit');

    Route::get('vender/service/provider/trading/unit/hub/setting/edit/accreditation/{id}', [ServiceProviderHubSettingController::class, 'accreditation'])->name('service.provider.trading.unit.hub.setting.accreditation');
    Route::post('vender/service/provider/trading/unit/hub/setting/edit/accreditation', [ServiceProviderHubSettingController::class, 'accreditationSubmit'])->name('service.provider.trading.unit.hub.setting.accreditation.submit');

    Route::get('vender/service/provider/trading/unit/hub/setting/edit/payment/method/{id}', [ServiceProviderHubSettingController::class, 'paymentMethod'])->name('service.provider.trading.unit.hub.setting.payment.method');
    Route::post('vender/service/provider/trading/unit/hub/setting/edit/payment/method', [ServiceProviderHubSettingController::class, 'paymentMethodSubmit'])->name('service.provider.trading.unit.hub.setting.payment.method.submit');
    Route::get('vender/service/provider/trading/unit/hub/setting/edit/add/product/offer/{id}', [ServiceProviderHubSettingController::class, 'productOffer'])->name('service.provider.trading.unit.hub.setting.product.offer');
    Route::get('vender/service/provider/trading/unit/hub/setting/edit/edit/product/offer/{id}/{trading_id}', [ServiceProviderHubSettingController::class, 'editProductOffer'])->name('service.provider.trading.unit.hub.setting.edit.product.offer');
    Route::post('vender/service/provider/trading/unit/hub/setting/edit/add/product/offer', [ServiceProviderHubSettingController::class, 'addProductOffer'])->name('service.provider.trading.unit.hub.setting.product.offer.submit');
    Route::post('vender/service/provider/trading/unit/hub/setting/edit/update/product/offer', [ServiceProviderHubSettingController::class, 'updateProductOffer'])->name('service.provider.trading.unit.hub.setting.product.offer.update');

    Route::get('vender/service/provider/trading/unit/app/data/contact/{id}', [ServiceProviderController::class, 'contact'])->name('service.provider.trading.unit.app.data.contact');
    Route::get('vender/service/provider/trading/unit/app/data/contact_detail/{id}', [ServiceProviderController::class, 'contactDetail'])->name('service.provider.trading.unit.app.data.contact.detail');
    Route::get('vender/service/provider/trading/unit/app/data/vehicle/{id}', [ServiceProviderController::class, 'vehicle'])->name('service.provider.trading.unit.app.data.vehicle');
    Route::get('vender/service/provider/trading/unit/app/data/vehicle_detail/{id}', [ServiceProviderController::class, 'vehicleDetail'])->name('service.provider.trading.unit.app.data.vehicle.detail');
    Route::get('vender/service/provider/trading/unit/app/data/quotes/{id}', [ServiceProviderController::class, 'quotes'])->name('service.provider.trading.unit.app.data.quotes');
    Route::get('vender/service/provider/trading/unit/app/data/quote_detail/{id}', [ServiceProviderController::class, 'quoteDetail'])->name('service.provider.trading.unit.app.data.quote.detail');
    Route::get('vender/service/provider/trading/unit/app/data/booking/{id}', [ServiceProviderController::class, 'booking'])->name('service.provider.trading.unit.app.data.booking');
    Route::get('vender/service/provider/trading/unit/app/data/booking_detail/{id}', [ServiceProviderController::class, 'bookingDetail'])->name('service.provider.trading.unit.app.data.booking.detail');
    Route::get('vender/service/provider/trading/unit/app/data/jobs/{id}', [ServiceProviderController::class, 'jobs'])->name('service.provider.trading.unit.app.data.jobs');
    Route::get('vender/service/provider/trading/unit/app/data/job_detail/{id}', [ServiceProviderController::class, 'jobDetail'])->name('service.provider.trading.unit.app.data.job.detail');
    Route::get('vender/service/provider/trading/unit/app/data/invoices/{id}', [ServiceProviderController::class, 'invoices'])->name('service.provider.trading.unit.app.data.invoices');
    Route::get('vender/service/provider/trading/unit/app/data/invoice_detail/{id}', [ServiceProviderController::class, 'invoiceDetail'])->name('service.provider.trading.unit.app.data.invoice.detail');
    Route::get('vender/service/provider/trading/unit/app/data/payment_detail/{id}', [ServiceProviderController::class, 'paymentDetail'])->name('service.provider.trading.unit.app.data.payment.detail');
    Route::get('vender/service/provider/trading/unit/app/data/payments/{id}', [ServiceProviderController::class, 'payments'])->name('service.provider.trading.unit.app.data.payments');

    Route::get('vender/service/provider/app/settings', [ServiceProviderGroupController::class, 'appSetting'])->name('service.provider.app.setting');
    Route::get('vender/service/provider/user/group', [ServiceProviderGroupController::class, 'userGroup'])->name('service.provider.user.group');
    Route::get('vender/service/provider/user/group/view/{id}', [ServiceProviderGroupController::class, 'userGroupView'])->name('service.provider.user.group.view');
    Route::get('vender/service/provider/user/group/edit/{id}', [ServiceProviderGroupController::class, 'userGroupEdit'])->name('service.provider.user.group.edit');
    Route::get('vender/service/provider/user/group/add', [ServiceProviderGroupController::class, 'addUserGroup'])->name('service.provider.user.group.add');
    Route::post('vender/service/provider/user/group/store', [ServiceProviderGroupController::class, 'storeUserGroup'])->name('service.provider.user.group.store');
    Route::post('vender/service/provider/user/group/update', [ServiceProviderGroupController::class, 'updateUserGroup'])->name('service.provider.user.group.update');

    Route::get('vender/service/provider/app/data/contact', [AppDataController::class, 'contact'])->name('service.provider.app.data.contact');
    Route::get('vender/service/provider/app/data/vehicle', [AppDataController::class, 'vehicle'])->name('service.provider.app.data.vehicle');
    Route::get('vender/service/provider/app/data/quotes', [AppDataController::class, 'quotes'])->name('service.provider.app.data.quotes');
    Route::get('vender/service/provider/app/data/booking', [AppDataController::class, 'booking'])->name('service.provider.app.data.booking');
    Route::get('vender/service/provider/app/data/jobs', [AppDataController::class, 'jobs'])->name('service.provider.app.data.jobs');
    Route::get('vender/service/provider/app/data/invoices', [AppDataController::class, 'invoices'])->name('service.provider.app.data.invoices');
    Route::get('vender/service/provider/app/data/payments', [AppDataController::class, 'payments'])->name('service.provider.app.data.payments');

    Route::get('vender/package', [VenderController::class, 'package'])->name('package.index');
    Route::get('vender/checkout/{id?}', [VenderController::class, 'viewPackage'])->name('package.checkout');
    Route::post('vender/checkout/submit', [VenderController::class, 'checkoutSubmit'])->name('package.checkout.submit');
    /* Team */
    Route::get('vender/team', [TeamController::class, 'index'])->name('team');
    Route::get('vender/team/add', [TeamController::class, 'add'])->name('team.add');
    Route::post('vender/team/save', [TeamController::class, 'store'])->name('team.store');
    Route::post('vender/search/team', [TeamController::class, 'search'])->name('team.search');
    Route::post('vender/team/update', [TeamController::class, 'update'])->name('team.update');
    Route::get('vender/team/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
    /* Team */
    /* Clients */
    Route::get('vender/client', [ClientController::class, 'index'])->name('client');
    Route::get('vender/client/add', [ClientController::class, 'add'])->name('client.add');
    Route::get('vender/client/edit', [ClientController::class, 'edit'])->name('client.edit');
    /* Clients */

    /* Invoice */
    Route::get('vender/invoice', [InvoiceController::class, 'index'])->name('invoice');
    Route::get('vender/invoices/print/{id?}', [InvoiceController::class, 'printInvoice'])->name('print.invoices');
    Route::get('vender/invoice/add', [InvoiceController::class, 'add'])->name('invoice.add');
    Route::get('vender/invoice/edit', [InvoiceController::class, 'edit'])->name('invoice.edit');
    Route::get('vender/invoice/view', [InvoiceController::class, 'view'])->name('invoice.view');
    /* Booking */

    /*   Report  */

    Route::get('vender/reports', [EarningController::class, 'index'])->name('reports');
    Route::get('vender/report/search', [EarningController::class, 'search'])->name('report.search');

    /* job */
    Route::get('vender/job', [JobController::class, 'index'])->name('job');
    Route::get('vender/job/add', [JobController::class, 'add'])->name('job.add');
    Route::get('vender/job/edit', [JobController::class, 'edit'])->name('job.edit');
    Route::get('vender/job/view', [JobController::class, 'view'])->name('job.view');
    /* job */

    /* quotes */
    Route::get('vender/quote', [QuotesController::class, 'index'])->name('quote');
    Route::get('vender/print/invoice/{id?}', [QuotesController::class, 'printInvoice'])->name('print.invoice');
    /* quotes */
    /* quotes */
    Route::get('vender/booking', [BookingController::class, 'index'])->name('booking');
    Route::get('vender/booking/print/invoice/{id?}', [BookingController::class, 'printInvoice'])->name('print.booking');
    /* quotes */
    /* Setting */
    Route::get('vender/under/review', [SettingController::class, 'comming_soon'])->name('comming_soon');

    // Route::get('vender/service', [SettingController::class, 'service'])->name('service');
    // Route::post('vender/service', [SettingController::class, 'serviceUpdate'])->name('service.update');

    // Route::get('vender/setting', [SettingController::class, 'index'])->name('setting');
    // Route::post('vender/setting', [SettingController::class, 'profileUpdate'])->name('setting.profile.update');
    // Route::post('vender/setting/social/update', [SettingController::class, 'socialUpdate'])->name('setting.social.update');

    // Route::get('vender/end/subscription', [SettingController::class, 'endSubscription'])->name('end.subscription');
    // Route::get('vender/resume/subscription', [SettingController::class, 'resumeSubscription'])->name('resume.subscription');
    // Route::post('vender/subscription/car/update', [SettingController::class, 'paymentMethodUpdate'])->name('payment.method.update');


    Route::get('vender/profile', [SettingController::class, 'vendorProfile'])->name('profiles');
    Route::post('vender/profile/start', [SettingController::class, 'vendorProfileStart'])->name('profile.start');
    Route::get('vender/profile/back/{id}', [SettingController::class, 'vendorProfileBack'])->name('profile.back');
    Route::get('vender/profile/step/{id}', [SettingController::class, 'vendorProfileStep'])->name('profile.step');
    Route::post('vender/profile/business/info', [SettingController::class, 'vendorProfileBusinessInfo'])->name('profile.business.info');
    Route::post('vender/profile/vat', [SettingController::class, 'vendorProfileVAT'])->name('profile.vat');
    Route::post('vender/profile/business/activities', [SettingController::class, 'vendorProfileBusinessActivities'])->name('profile.business.activities');
    Route::post('vender/profile/trading/unt', [SettingController::class, 'vendorProfileTradingUnit'])->name('profile.trading.unit');

    Route::post('vender/profile/main/account', [SettingController::class, 'vendorProfileMainAccount'])->name('profile.main.account');
    Route::post('vender/profile/bank/account', [SettingController::class, 'vendorProfileBankAccount'])->name('profile.bank.account');

    Route::post('vender/profile/select/plan', [SettingController::class, 'vendorProfilePlanSelect'])->name('profile.plan.select');
    Route::get('vender/profile/payment/intent', [SettingController::class, 'paymentIntent'])->name('profile.payment.intent');
    Route::get('vender/profile/term/condition', [SettingController::class, 'termCondition'])->name('profile.term');
    Route::get('vender/profile/save/bank/turbo', [SettingController::class, 'saveBankForTurbo'])->name('profile.save.bank.turbo');
    Route::post('vender/profile/term/and/condition', [SettingController::class, 'termConditionUpdate'])->name('profile.terms');
    Route::get('vender/profile/submit', [SettingController::class, 'submitApplication'])->name('profile.submit');

    Route::get('vender/profile/trading/name/next', [SettingController::class, 'vendorProfileTradingName'])->name('profile.trading.name.next');
    Route::post('vender/profile/trading/name', [SettingController::class, 'addTradingName'])->name('profile.trading.name');
    Route::get('vender/profile/trading/name/delete/{id}', [SettingController::class, 'TradingNameDel'])->name('profile.trading.delete');


    /* Setting */



    /*********************** Product & Offer  *****************/


    Route::get('vender/product/offer', [QuickProductController::class, 'index'])->name('product.offer.index');
    Route::get('vender/product/offer/create', [QuickProductController::class, 'create'])->name('product.offer.create');
    Route::get('vender/product/offer/edit/{id?}', [QuickProductController::class, 'edit'])->name('product.offer.edit');
    Route::get('vender/product/offer/delete/{id?}', [QuickProductController::class, 'delete'])->name('product.offer.delete');
    Route::post('vender/product/offer/save', [QuickProductController::class, 'store'])->name('product.offer.save');
    Route::post('vender/product/offer/update', [QuickProductController::class, 'update'])->name('product.offer.update');


    Route::get('vender/subscription', [SubscriptionController::class, 'index'])->name('subscription.index');
    Route::get('vender/subscription/detail/{id}', [SubscriptionController::class, 'subscriptionDetail'])->name('subscription.detail');
    Route::get('vender/invoice', [SubscriptionController::class, 'invoice'])->name('invoice.index');
    Route::get('vender/invoice/detail/{id}', [SubscriptionController::class, 'invoiceDetail'])->name('invoice.detail');
    Route::get('vender/invoice/pay/{id}', [SubscriptionController::class, 'invoicePay'])->name('invoice.pay');

});

