<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*--- ROUTE: HOME ---*/
Route::get('/', function () {
    return Inertia::render('Brenden/ETravel/Home');
})->name('home');

/*--- ROUTES:  PAGES ---*/
$list = [ 'destinations', 'transport', 'accomodation', 'meals', 'events', 'guides',];
foreach ($list as $page) {
    Route::get('/'.$page, function () use ($page) {
        return Inertia::render('Brenden/ETravel', [  'page' => [ 'page' => $page ] ]);
    })->name($page);
}
