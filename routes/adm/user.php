<?php

use App\Http\Controllers\Adm\User\ActivityController;
use App\Http\Controllers\Adm\User\BillingController;
use App\Http\Controllers\Adm\User\ClientController;
use App\Http\Controllers\Adm\User\FirmController;
use App\Http\Controllers\Adm\User\GuestController;
use App\Http\Controllers\Adm\User\LoginController;
use App\Http\Controllers\Adm\User\PasswordController;
use App\Http\Controllers\Adm\User\ShippingController;
use App\Http\Controllers\Adm\User\SubscriberController;
use App\Http\Controllers\Adm\User\UserController;
use App\Http\Controllers\Adm\User\VisitorController;
use Illuminate\Support\Facades\Route;

Route::resources([
    'users' => UserController::class,
    'password' => PasswordController::class,
    'login' => LoginController::class,
    'activity' => ActivityController::class,
    'visitors' => VisitorController::class,
    'subscribers' => SubscriberController::class,
    'guests' => GuestController::class,
    'clients' => ClientController::class,
    'billings' => BillingController::class,
    'firms' => FirmController::class,
    'shippings' => ShippingController::class,
]);
