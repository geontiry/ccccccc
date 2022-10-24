<?php

use App\Http\Controllers\Adm\Supplier\QuotationController;
use App\Http\Controllers\Adm\Supplier\QuotingController;
use App\Http\Controllers\Adm\Supplier\SupplierController;
use Illuminate\Support\Facades\Route;

Route::resources([
    'suppliers' => SupplierController::class,
    'quotations' => QuotationController::class,
    'quotings' => QuotingController::class,
]);
