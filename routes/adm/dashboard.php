<?php

use App\Http\Controllers\Adm\Dashboard\DashboardController;
use App\Http\Controllers\Adm\Dashboard\MenuController;
use App\Http\Controllers\Adm\Dashboard\ModuleController;
use Illuminate\Support\Facades\Route;

Route::resources([
    'dashboards' => DashboardController::class,
    'modules' => ModuleController::class,
    'menus' => MenuController::class,
]);
