<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*--- ELECTRICAL HOME ---*/
Route::get('/', function () {
    return Inertia::render('Synvast/Electrical/Home');
})->name('home');

/*--- ELECTRICAL CATALOGUE ---*/
$electricals = ['products', 'services', 'contractors'];

foreach ($electricals as $type) {
    //TYPES
    Route::get('/'.$type, function () {
        return Inertia::render('Synvast/Electrical/PageType');
    })->name($type);
    //TYPES - DIVISIONS
    Route::get('/'.$type.'/{division}', function ($division) use ($type) {
        return Inertia::render('Synvast/Electrical/PageDivision', [ 'params' => [ 'division'=>$division] ]);
    })->name($type.'.division');
    //TYPES - DIVISIONS - CATEGORIES
    Route::get('/'.$type.'/{division}/{category}', function ($division, $category) use ($type) {
        return Inertia::render('Synvast/Electrical/PageCategory', [ 'params' => [ 'division'=>$division, 'category'=>$category ] ]);
    })->name($type.'.division.category');
    //TYPES - DIVISIONS - CATEGORIES - LISTINGS
    Route::get('/'.$type.'/{division}/{category}/{listing}', function ($division, $category, $listing) use ($type) {
        return Inertia::render('Synvast/Electrical/PageListing', [ 'params' => [ 'division'=>$division, 'category'=>$category, 'listing'=>$listing, ] ]);
    })->name($type.'.division.category.listing');
    //TYPES - DIVISIONS - CATEGORIES - LISTINGS - CATALOGUES
    Route::get('/'.$type.'/{division}/{category}/{listing}/{catalogue}', function ($division, $category, $listing, $catalogue) use ($type) {
        return Inertia::render('Synvast/Electrical/PageCatalogue', [ 'params' => [ 'division'=>$division, 'category'=>$category, 'listing'=>$listing, 'catalogue'=>$catalogue, ] ]);
    })->name($type.'.division.category.listing.catalogue');
    //TYPES - DIVISIONS - CATEGORIES - LISTINGS - PRODUCTS
    Route::get('/'.$type.'/{division}/{category}/{listing}/{catalogue}/{product}', function ($division, $category, $listing, $catalogue, $product) use ($type) {
        return Inertia::render('Synvast/Electrical/PageProduct', [ 'params' => [ 'division'=>$division, 'category'=>$category, 'listing'=>$listing, 'catalogue'=>$catalogue, 'product'=>$product] ]);
    })->name($type.'.division.category.listing.catalogue.product');
}



/*--- ROUTES:  PRODUCTS ---*/
$list = [ 'lights', 'switches', 'sockets', 'cables', 'panels', 'modules', 'tools', 'energy', 'machines', 'appliances', 'services', 'contractors' ];

foreach ($list as $page) {
    Route::get('/'.$page, function () use ($page) {
        return Inertia::render('Synvast/Electrical/EProducts', [ 'page' => [ 'page' => $page ] ]);
    })->name($page);

    Route::get('/'.$page.'/{category}', function ($category) use ($page) {
        return Inertia::render('Synvast/Electrical/EProducts1', [ 'page' => [ 'page' => $page, 'category'=>$category] ]);
    })->name($page.'.category');

    Route::get('/'.$page.'/{category}/{group}', function ($category, $group) use ($page) {
        return Inertia::render('Synvast/Electrical/EProducts2', [ 'page' => [ 'page' => $page, 'category'=>$category, 'group'=>$group ] ]);
    })->name($page.'.category.group');

    Route::get('/'.$page.'/{category}/{group}/{item}', function ($category, $group, $item) use ($page) {
        return Inertia::render('Synvast/Electrical/EProduct', [ 'page' => [ 'page' => $page, 'category'=>$category, 'group'=>$group, 'item'=>$item, ] ]);
    })->name($page.'.category.group.item');
}

/*--- ROUTES: CART ---*/
Route::get('/cart', function () {
    return Inertia::render('Synvast/Electrical/Cart');
})->name('cart');

Route::get('/cart/checkout', function () {
    return Inertia::render('Synvast/Electrical/Checkout');
})->name('cart.checkout');

/*--- ROUTES: SUPPORT ---*/
Route::get('/support', function () {
    return Inertia::render('Synvast/Electrical/Support');
})->name('support');

$support = [
    'account' => 'Account',
    'shopping' => 'Shopping',
    'orders' => 'Orders',
    'partners' => 'Partners',
    'interest' => 'Interest',
    'faq' => 'FAQ',
    'paymentoffers' => 'PayOffer',
    'shippingdelivery' => 'ShipDeliver',
    'returnrefund' => 'RetRefund',
    'privacy' => 'Privacy',
    'cookies' => 'Cookies',
    'terms' => 'Terms',
];

foreach ($support as $link => $page) {
    Route::get('/support/'.$link, function () use ($page) {
        return Inertia::render('Synvast/Electrical/Support/'.$page);
    })->name('support.'.$link);
}

Route::get('/greeting/{page}', function () {
    return 'Hello World';
})->where('page', 'about|contact|terms');


/* $pages = array("Peter", "Joe", "Glenn", "Cleveland");
    if (in_array($page, $pages)){
        abort(404);
    }*/
