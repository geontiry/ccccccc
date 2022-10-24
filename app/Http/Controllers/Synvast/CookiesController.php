<?php

namespace App\Http\Controllers\Synvast;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CookiesController extends Controller
{
    public function consent(Request $request, $id)
    {
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
}
