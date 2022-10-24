<?php

use App\Http\Controllers\API\v1\MpesaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//MPESA
Route::post('mpesa/auth', [MpesaController::class, 'generateAccessToken']);
Route::post('mpesa/register/urls', [MpesaController::class, 'registerUrls']);
Route::post('mpesa/stk/push', [MpesaController::class, 'customerMpesaSTKPush']);
Route::post('mpesa/validation', [MpesaController::class, 'mpesaValidation']);
Route::post('mpesa/transaction/confirmation', [MpesaController::class, 'mpesaConfirmation']);



// Route::get('mpesa/auth', function (Request $request) {
//   return "test";
// });



