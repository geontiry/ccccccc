<?php

namespace App\Http\Controllers\Synvast;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Inertia\Inertia;

class PageHomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //$products = Product::all()->count();
        $product_id = 456545;
        $code = 12;
        $product_code = $product_id.$code;
        $age = 60;
        //$consents = array( "functionality"=>"false", "preference"=>"true", "analytic"=>"false", "advertising"=>"false");
        Cookie::queue('name.age', $age, 60);
        $cookies = Cookie::get('name');


        session()->flash('flash.banner', $cookies);
        session()->flash('flash.bannerStyle', 'success'); //success/danger
        return Inertia::render('Synvast/Electrical/Home', [
            //'users' => $products
        ]);
    }
}
