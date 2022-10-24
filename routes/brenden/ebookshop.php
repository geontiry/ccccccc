<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*--- ROUTE FOR HOME ---*/
Route::get('/', function () {
    return Inertia::render('Brenden/EBookshop/Home');
})->name('home');
Route::get('/videoplay', function () {
    return Inertia::render('Brenden/EBookshop/VideoPlay');
})->name('videoplay');
Route::get('/history', function () {
    return Inertia::render('Brenden/EBookshop/History');
})->name('history');
Route::get('/channel', function () {
    return Inertia::render('Brenden/EBookshop/Channel');
})->name('channel');
