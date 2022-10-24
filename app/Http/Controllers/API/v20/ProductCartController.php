<?php

namespace App\Http\Controllers\API\v20;

use App\Http\Controllers\Controller;
use App\Models\Sale\Cart;
use Illuminate\Http\Request;

class ProductCartController extends Controller
{
    public function list()
    {
        $carts = Cart::query()
            ->select('id', 'product_code', 'quantity', 'price')
            ->selectRaw('price * quantity as total')
            ->get();

        $data['cart_items'] = $carts;
        $data['cart_count'] = $carts->sum('quantity');
        $data['cart_total'] = $carts->sum('total');

        return response()->success($data);
    }

    public function add(Request $request, $storage = 'database') //session, cookies
    {
        $items = Cart::query()
            ->where('product_code', $request->product_code)
            ->value('quantity');

        $cart = Cart::updateOrCreate(
            [
                'product_code' => $request->product_code,
            ],
            [
                'quantity' => $items > 0 ? $items + $request->quantity : $request->quantity,
                'price' => $request->price,
            ]
        );

        $data['items'] = !is_null($cart) ? true : false;

        return response()->success($data);
    }
}
