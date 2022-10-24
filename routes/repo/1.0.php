<?php

use App\Http\Controllers\API\Pages\CookiesController;
use Illuminate\Support\Facades\Route;

Route::post('cookies', [CookiesController::class, 'consent'])->name('cookies');
