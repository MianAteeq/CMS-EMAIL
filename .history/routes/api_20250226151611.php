<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\MessaeController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => ['cors']], function () {
Route::post('/send', [EmailController::class,'sendEmail']);
Route::post('/send/message', [MessaeController::class, 'sendMessage']);
Route::get('/get/instance', [MessaeController::class, 'getWhatsAppInfo']);
Route::get('/get/qr/code', [MessaeController::class, 'getWhatsAppIQrCode']);
Route::get('/wa/logout', [MessaeController::class, 'waLogout']);
Route::get('/get/stats', [EmailController::class, 'getStat']);
Route::get('/get/wa/status', [MessaeController::class, 'getWAStatus']);
Route::get('/get/wp/status', [MessaeController::class, 'getWPStatus']);
});
