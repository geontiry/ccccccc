<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*-- COMPANY --*/
Route::get('/', function () {
    // return Inertia::render('Demo/SGB/Company');
    return Inertia::render('Company/Landing');
});

Route::get('/developer', function () {
    return Inertia::render('Genset/Developer/Home');
});

/*-- TESTS --*/
Route::get('/test', function () {
    return Inertia::render('Composition');
});
Route::get('/app1', function () {
    return Inertia::render('Apps/App1/Home');
});
Route::get('/app2', function () {
    return Inertia::render('Apps/App2/Home');
});
Route::get('/app3', function () {
    return Inertia::render('Apps/App3/Home');
});
Route::get('/app4', function () {
    return Inertia::render('Apps/App4/Home');
});
Route::get('/app5', function () {
    return Inertia::render('Apps/App5/Home');
});
Route::get('/app6', function () {
    return Inertia::render('Apps/App6/Home');
});
Route::get('/app7', function () {
    return Inertia::render('Apps/App7/Home');
});
Route::get('/app8', function () {
    return Inertia::render('Apps/App8/Home');
});
Route::get('/app9', function () {
    return Inertia::render('Apps/App9/Home');
});
Route::get('/app10', function () {
    return Inertia::render('Apps/App10/Home');
});
Route::get('/app11', function () {
    return Inertia::render('Apps/App11/Home');
});
Route::get('/app12', function () {
    return Inertia::render('Apps/App12/Home');
});
Route::get('/app13', function () {
    return Inertia::render('Apps/App13/Home');
});

Route::get('/app15', function () {
    return Inertia::render('Apps/App15/Home');
});
Route::get('/app16', function () {
    return Inertia::render('Apps/App16/Home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


/*Route::get('/', function () {
    return Inertia::render('Synvast/Electrical/Home',
    [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'version' => config('version.string'),
    ]
);
})->name('synvast');*/

/*--- ROUTES FOR USER ---*/
Route::get('/user', function () {
    return Inertia::render('User/Profile');
})->name('user');

/*
Route::domain('{username}.' . env('APP_URL'))->group(function () {
    Route::get('post/{id}', function ($username, $id) {
        return 'User ' . $username . ' is trying to read post ' . $id;
    });
});*/

//Multi-Language Validation
Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-z]{2}']], function () {
});
//Dynamic Subdomain Routing
Route::domain('{account}.myapp.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        //
    });
});
//Rate Limiting – Global and for Guests/Users
// maximum of 10 requests per minute for guests 60 for authenticated users
Route::middleware('auth:api', 'throttle:10|60,1')->group(function () {
    //
});
