<?php

use App\Http\Controllers\Adm\Location\CountyController;
use App\Http\Controllers\Adm\Location\DemographController;
use App\Http\Controllers\Adm\Location\LocationController;
use App\Http\Controllers\Adm\Location\RegionController;
use App\Http\Controllers\Adm\Location\SubcountyController;
use Illuminate\Support\Facades\Route;

Route::resources([
    'regions' => RegionController::class,
    'counties' => CountyController::class,
    'subcounties' => SubcountyController::class,
    'demographs' => DemographController::class,
    'locations' => LocationController::class,
]);
