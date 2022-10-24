<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*--- ROUTE: HOME ---*/
Route::get('/', function () {
    return Inertia::render('Genset/Estate/Home');
})->name('home');

/*--- ROUTES:  PROPERTY ---*/
$list = [ 'test',  ];
foreach ($list as $page) {
    Route::get('/'.$page, function () use ($page) {
        return Inertia::render('Genset/Estate', [  'page' => [ 'page' => $page ] ]);
    })->name($page);
}
