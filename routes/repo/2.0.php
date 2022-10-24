<?php

use App\Http\Controllers\API\v20\CatalogueInfoController;
use App\Http\Controllers\API\v20\CompanyInfoController;
use App\Http\Controllers\API\v20\ProductCartController;
use Illuminate\Support\Facades\Route;

Route::controller(CompanyInfoController::class)->group(function () {
    Route::get('/sites', 'sites')->name('sites');
});

Route::controller(CatalogueInfoController::class)->group(function () {
    Route::get('/categories/{site}', 'categories')->name('categories');
    Route::get('/catalogues/{site}', 'catalogues')->name('catalogues');
});

Route::controller(ProductCartController::class)->group(function () {
    Route::get('/list', 'list')->name('list');
});
