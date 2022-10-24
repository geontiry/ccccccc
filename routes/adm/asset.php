<?php

use App\Http\Controllers\Adm\Asset\FacilityController;
use App\Http\Controllers\Adm\Asset\FilingController;
use App\Http\Controllers\Adm\Asset\PhaseController;
use App\Http\Controllers\Adm\Asset\PosController;
use App\Http\Controllers\Adm\Asset\WarehouseController;
use Illuminate\Support\Facades\Route;

Route::resources([
    'facilities' => FacilityController::class,
    'phases' => PhaseController::class,
    'warehouses' => WarehouseController::class,
    'pos' => PosController::class,
    'filings' => FilingController::class,
]);
