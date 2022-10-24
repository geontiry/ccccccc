<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*--- ROUTE: HOME ---*/
Route::get('/', function () {
    return Inertia::render('Brenden/EWeb/Home');
})->name('home');

/*--- ROUTES:  PAGES ---*/
$list = [ 'about', 'websites', 'design', 'domain', 'host', 'integrate', 'learn', 'hire'];
foreach ($list as $page) {
    Route::get('/'.$page, function () use ($page) {
        return Inertia::render('Brenden/EWeb', [  'page' => [ 'page' => $page ] ]);
    })->name($page);
}

/*--- ROUTES FOR WEBSITES ---*/
Route::get('/websites/ecommerce', function () {
    return Inertia::render('Brenden/EWeb/Websites/ECommerce');
})->name('websites.ecommerce');
Route::get('/websites/corporate', function () {
    return Inertia::render('Brenden/EWeb/Websites/Corporate');
})->name('websites.corporate');
Route::get('/websites/institution', function () {
    return Inertia::render('Brenden/EWeb/Websites/Institution');
})->name('websites.institution');
Route::get('/websites/personal', function () {
    return Inertia::render('Brenden/EWeb/Websites/Personal');
})->name('websites.personal');
Route::get('/websites/{category}/{site}', function () {
    return Inertia::render('Brenden/EWeb/Websites/Show');
})->name('websites.show');

/*--- ROUTES FOR DESIGN ---*/
Route::get('/design/{category}/{plan}', function () {
    return Inertia::render('Brenden/EWeb/Design/Show');
})->name('design.show');

/*--- ROUTES FOR DOMAIN ---*/
Route::get('/domain/{whois}', function () {
    return Inertia::render('Brenden/EWeb/Domain/Show');
})->name('domain.show');

/*--- ROUTES FOR HOSTING ---*/
Route::get('/host/{category}/{plan}', function () {
    return Inertia::render('Brenden/EWeb/Host/Show');
})->name('host.show');

/*--- ROUTES FOR INTEGRATION ---*/
Route::get('/integrate/{category}/{method}', function () {
    return Inertia::render('Brenden/EWeb/Integration/Show');
})->name('integrate.show');

/*--- ROUTES FOR LEARNING ---*/
Route::get('/learn/client', function () {
    return Inertia::render('Brenden/EWeb/Learn/Client');
})->name('learn.client');
Route::get('/learn/server', function () {
    return Inertia::render('Brenden/EWeb/Learn/Server');
})->name('learn.server');
Route::get('/learn/full', function () {
    return Inertia::render('Brenden/EWeb/Learn/Full');
})->name('learn.full');
Route::get('/learn/{category}/{course}', function () {
    return Inertia::render('Brenden/EWeb/Learn/Show');
})->name('learn.show');

/*--- ROUTES FOR HIRING ---*/
Route::get('/hire/{expert}', function () {
    return Inertia::render('Brenden/EWeb/Hire/Show');
})->name('learn.hire');

/*--- ROUTES FOR CART ---*/
Route::get('/cart', function () {
    return Inertia::render('Brenden/EWeb/Cart');
})->name('cart');
Route::get('/quotations', function () {
    return Inertia::render('Brenden/EWeb/Quotations');
})->name('quotations');
Route::get('/favorites', function () {
    return Inertia::render('Brenden/EWeb/Favorites');
})->name('favorites');
Route::get('/compare', function () {
    return Inertia::render('Brenden/EWeb/Compare');
})->name('compare');

/*--- ROUTES FOR SUPPORT ---*/
Route::get('/support', function () {
    return Inertia::render('Brenden/EWeb/Support');
})->name('support');
Route::get('/support/account', function () {
    return Inertia::render('Brenden/EWeb/Support/Account');
})->name('support.account');
Route::get('/support/shopping', function () {
    return Inertia::render('Brenden/EWeb/Support/Shopping');
})->name('support.shopping');
Route::get('/support/orders', function () {
    return Inertia::render('Brenden/EWeb/Support/Orders');
})->name('support.orders');
Route::get('/support/partners', function () {
    return Inertia::render('Brenden/EWeb/Support/Partners');
})->name('support.partners');
Route::get('/support/interest', function () {
    return Inertia::render('Brenden/EWeb/Support/Interest');
})->name('support.interest');
Route::get('/support/faq', function () {
    return Inertia::render('Brenden/EWeb/Support/FAQ');
})->name('support.faq');
Route::get('/support/payment&offer', function () {
    return Inertia::render('Brenden/EWeb/Support/PayOffer');
})->name('support.paymentoffers');
Route::get('/support/shipping&delivery', function () {
    return Inertia::render('Brenden/EWeb/Support/ShipDeliver');
})->name('support.shippingdelivery');
Route::get('/support/return&refund', function () {
    return Inertia::render('Brenden/EWeb/Support/RetRefund');
})->name('support.returnrefund');
Route::get('/support/privacy', function () {
    return Inertia::render('Brenden/EWeb/Support/Privacy');
})->name('support.privacy');
Route::get('/support/cookies', function () {
    return Inertia::render('Brenden/EWeb/Support/Cookies');
})->name('support.cookies');
Route::get('/support/terms', function () {
    return Inertia::render('Brenden/EWeb/Support/Terms');
})->name('support.terms');
