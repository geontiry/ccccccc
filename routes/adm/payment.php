<?php

use App\Http\Controllers\Adm\Payment\CardageController;
use App\Http\Controllers\Adm\Payment\CardController;
use App\Http\Controllers\Adm\Payment\CashageController;
use App\Http\Controllers\Adm\Payment\CashController;
use App\Http\Controllers\Adm\Payment\MethodController;
use App\Http\Controllers\Adm\Payment\MpesaController;
use App\Http\Controllers\Adm\Payment\MpesageController;
use App\Http\Controllers\Adm\Payment\PayingController;
use App\Http\Controllers\Adm\Payment\PaymentController;
use App\Http\Controllers\Adm\Payment\TillageController;
use App\Http\Controllers\Adm\Payment\TillingController;
use App\Http\Controllers\Adm\Payment\TransactionController;
use Illuminate\Support\Facades\Route;

Route::resources([
    'payments' => PaymentController::class,
    'cashes' => CashController::class,
    'cashages' => CashageController::class,
    'tillings' => TillingController::class,
    'tillages' => TillageController::class,
    'mpesas' => MpesaController::class,
    'mpesages' => MpesageController::class,
    'cards' => CardController::class,
    'cardages' => CardageController::class,
    'methods' => MethodController::class,
    'payings' => PayingController::class,
    'transactions' => TransactionController::class,
]);
