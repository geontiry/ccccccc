<?php

use App\Http\Controllers\Adm\Business\BusinessController;
use App\Http\Controllers\Adm\Business\ContactController;
use App\Http\Controllers\Adm\Business\OperationController;
use App\Http\Controllers\Adm\Business\PageController;
use App\Http\Controllers\Adm\Business\SiteController;
use Illuminate\Support\Facades\Route;

Route::resources([
    'businesses' => BusinessController::class,
    'sites' => SiteController::class,
    'pages' => PageController::class,
    'contacts' => ContactController::class,
    'operations' => OperationController::class,
]);
