<?php

use App\Http\Controllers\Adm\Pricing\{
    PricingController
};
use Illuminate\Support\Facades\Route;

Route::resources([
        'pricings' => PricingController::class,
]);
