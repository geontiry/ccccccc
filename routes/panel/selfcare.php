<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/profile', function () {
    return Inertia::render('Selfcare/Profile');
})->name('profile');
Route::get('/billing', function () {
    return Inertia::render('Selfcare/Billing');
})->name('billing');
Route::get('/payment', function () {
    return Inertia::render('Selfcare/Payment');
})->name('payment');
Route::get('/wallet', function () {
    return Inertia::render('Selfcare/Wallet');
})->name('wallet');


Route::get('/orders', function () {
    return Inertia::render('Selfcare/Orders');
})->name('orders');
Route::get('/reviews', function () {
    return Inertia::render('Selfcare/Reviews');
})->name('reviews');

Route::get('/history', function () {
    return Inertia::render('Selfcare/History');
})->name('history');

Route::get('/messages', function () {
    return Inertia::render('Selfcare/Messages');
})->name('messages');

Route::get('/listing', function () {
    return Inertia::render('Selfcare/Listing');
})->name('listing');

Route::get('/settings', function () {
    return Inertia::render('Selfcare/Settings');
})->name('settings');
