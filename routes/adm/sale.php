<?php

use App\Http\Controllers\Adm\Sale\CartController;
use App\Http\Controllers\Adm\Sale\CasherController;
use App\Http\Controllers\Adm\Sale\CashingController;
use App\Http\Controllers\Adm\Sale\CashlistController;
use App\Http\Controllers\Adm\Sale\CompareController;
use App\Http\Controllers\Adm\Sale\DeliveryController;
use App\Http\Controllers\Adm\Sale\FavoriteController;
use App\Http\Controllers\Adm\Sale\OrderController;
use App\Http\Controllers\Adm\Sale\OrderingController;
use App\Http\Controllers\Adm\Sale\OrderlistController;
use App\Http\Controllers\Adm\Sale\QuoteController;
use App\Http\Controllers\Adm\Sale\QuotelistController;
use App\Http\Controllers\Adm\Sale\RefundController;
use App\Http\Controllers\Adm\Sale\ReplaceController;
use App\Http\Controllers\Adm\Sale\RetuurnController;
use Illuminate\Support\Facades\Route;

Route::resources([
    'cashers' => CasherController::class,
    'cashlists' => CashlistController::class,
    'cashings' => CashingController::class,
    'compares' => CompareController::class,
    'favorites' => FavoriteController::class,
    'quotes' => QuoteController::class,
    'quotelists' => QuotelistController::class,
    'carts' => CartController::class,
    'orders' => OrderController::class,
    'orderlists' => OrderlistController::class,
    'orderings' => OrderingController::class,
    'deliveries' => DeliveryController::class,
    'retuurns' => RetuurnController::class,
    'refunds' => RefundController::class,
    'replaces' => ReplaceController::class,
]);
