<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*--- ROUTE: HOME ---*/
Route::get('/', function () {
    return Inertia::render('Brenden/ECyber/Home');
})->name('home');

/*--- ROUTES:  PROPERTY ---*/
$list = [ 'engineering', 'computing', 'business', 'health', 'farming', ];
foreach ($list as $page) {
    Route::get('/'.$page, function () use ($page) {
        return Inertia::render('Brenden/ECyber', [  'page' => [ 'page' => $page ] ]);
    })->name($page);
}
