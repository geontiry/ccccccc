<?php

use App\Http\Controllers\Adm\Shipment\ShipmentController;
use App\Http\Controllers\Adm\Shipment\ShipRateController;
use App\Http\Controllers\Adm\Shipment\ShipTotalController;
use App\Http\Controllers\Adm\Shipment\ShipZoneController;
use Illuminate\Support\Facades\Route;

Route::resources([
    'ship-rates' => ShipRateController::class,
    'ship-zones' => ShipZoneController::class,
    'ship-totals' => ShipTotalController::class,
    'shipments' => ShipmentController::class,
]);
