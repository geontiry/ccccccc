<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Terminal/Home');
})->name('home');
Route::get('/pos', function () {
    return Inertia::render('Terminal/Terminal');
})->name('pos');
