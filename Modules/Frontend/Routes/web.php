<?php

use Modules\Frontend\Http\Controllers\FrontendController;
use Modules\Frontend\Http\Controllers\SubscriptionController;
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

Route::get('/new/look', function () {

    return view('frontend::register-portal.business-info');

    });

Route::name('website.')->group(function () {
    Route::get('/', [FrontendController::class, 'index'])->name('index');
    Route::get('/about', [FrontendController::class, 'about'])->name('about');
    Route::get('/service', [FrontendController::class, 'service'])->name('service');
    Route::get('/pricing', [FrontendController::class, 'pricing'])->name('pricing');
    Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
    Route::get('/sign-in', [FrontendController::class, 'sign_in'])->name('sign-in');
    Route::get('/service-details', [FrontendController::class, 'service_details'])->name('service-details');
    Route::get('/terms-condition', [FrontendController::class, 'terms_condition'])->name('terms-condition');
    Route::get('/privacy-policy', [FrontendController::class, 'privacy_policy'])->name('privacy-policy');
        // Route::get('/sign-up', [FrontendController::class, 'sign_up'])->name('sign-up');

        Route::middleware(['guest'])->group(function () {
        Route::get('/checkout/{id}', [SubscriptionController::class, 'create'])->name('subscription.checkout');
        Route::post('/checkouts/submit', [SubscriptionController::class, 'store'])->name('subscription.checkout.submit');

        Route::get('/register', [SubscriptionController::class, 'register'])->name('vendor.register');
        Route::get('/login', [SubscriptionController::class, 'loginForm'])->name('vendor.login');
        Route::get('/thank/you', [SubscriptionController::class, 'thankYou'])->name('vendor.thank.you');
        Route::post('/login', [SubscriptionController::class, 'login'])->name('vendor.login.submit');
        Route::post('/validate', [SubscriptionController::class, 'validate'])->name('vender.validate');
});
Route::get('/vender/logout', [SubscriptionController::class, 'logout'])->name('vendor.logout.submit');

    Route::group(['middleware' => 'auth:user'], function () {
        // Route::get('/subscription/stripe/form', [SubscriptionController::class, 'stripe_form'])->name('subscription.stripe.form');
        // Route::post('/subscription/orderPost', [SubscriptionController::class, 'orderPost'])->name('subscription.orderPost');
    });
    // Route::post('/subscription/user', [SubscriptionController::class, 'login'])->name('subscribe.user');
    // Route::post('/subscription/register', [SubscriptionController::class, 'register'])->name('subscription.register');
    // Route::get('/subscription/{id}', [SubscriptionController::class, 'index'])->name('subscription');
    // Route::get('/user/logout', [SubscriptionController::class, 'logout'])->name('logout');
});
