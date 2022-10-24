<?php

use App\Http\Controllers\PaymentController;
use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/pagination', function () {
    return Inertia::render('Test/Pagination', [
        'users' => User::query()
            ->when(Request::input('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->through(fn ($user) => ['id' => $user->id, 'name' => $user->name, 'email' => $user->email, ])
            ->paginate(10)
            ->withQueryString(),
        'filters' => Request::only(['search'])
    ]);
});

Route::get('/form', function () {
    return Inertia::render('Test/InertiaForm');
});
Route::get('/synvast', function () {
    return Inertia::render('Test/Synvast');
});
Route::get('/careers', function () {
    return Inertia::render('Test/Careers');
});
Route::get('/dash', function () {
    return Inertia::render('Test/Dashboard');
});
Route::get('/recruiter', function () {
    return Inertia::render('Test/Recruiter');
});
Route::get('/snackbar', function () {
    return Inertia::render('Test/Snackbar');
});
Route::get('/todo', function () {
    return Inertia::render('Test/Todo');
});
Route::get('/panel', function () {
    return Inertia::render('Test/Panel');
});
Route::get('pay', [PaymentController::class, 'payment']);
