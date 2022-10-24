<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*--- ROUTE FOR HOME ---*/
Route::get('/', function () {
    return Inertia::render('Brenden/EGarden/Home');
})->name('home');
