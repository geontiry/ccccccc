<?php

use App\Http\Controllers\Panel\Admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;

Route::controller(AdminDashboardController::class)->group(function () {
  Route::get('/menu', 'menu')->name('menu');
});