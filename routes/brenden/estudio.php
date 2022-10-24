<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*--- ROUTE: HOME ---*/
Route::get('/', function () {
    return Inertia::render('Brenden/EStudio/Home');
})->name('home');

/*--- ROUTES:  PROPERTY ---*/
$list = [ 'print', 'design', 'brand', 'photography', 'farming', ];
foreach ($list as $page) {
    Route::get('/'.$page, function () use ($page) {
        return Inertia::render('Brenden/EStudio', [  'page' => [ 'page' => $page ] ]);
    })->name($page);
}
