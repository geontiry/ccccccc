<?php

use App\Http\Controllers\Adm\Inventory\InventoryController;
use App\Http\Controllers\Adm\Inventory\InvoicingController;
use App\Http\Controllers\Adm\Inventory\ProcurementController;
use App\Http\Controllers\Adm\Inventory\PurchaseController;
use App\Http\Controllers\Adm\Inventory\PurchasingController;
use App\Http\Controllers\Adm\Inventory\StackController;
use App\Http\Controllers\Adm\Inventory\StockageController;
use App\Http\Controllers\Adm\Inventory\StockController;
use App\Http\Controllers\Adm\Inventory\StockingController;
use App\Http\Controllers\Adm\Inventory\StocklistController;
use App\Http\Controllers\Adm\Inventory\StorageController;
use App\Http\Controllers\Adm\Inventory\SupplyController;
use App\Http\Controllers\Adm\Inventory\SupplyingController;
use App\Http\Controllers\Adm\Inventory\TierController;
use Illuminate\Support\Facades\Route;

Route::resources([
    'stacks' => StackController::class,
    'tiers' => TierController::class,
    'stocks' => StockController::class,
    'storages' => StorageController::class,
    'purchases' => PurchaseController::class,
    'purchasings' => PurchasingController::class,
    'procurements' => ProcurementController::class,
    'supplies' => SupplyController::class,
    'invoicings' => InvoicingController::class,
    'supplyings' => SupplyingController::class,
    'inventories' => InventoryController::class,
    'stockings' => StockingController::class,
    'stockages' => StockageController::class,
    'stocklists' => StocklistController::class,
]);
