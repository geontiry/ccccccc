<?php

namespace App\Http\Controllers\Adm\Sale;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sale\CartRequest;
use App\Models\Sale\Cart;

class CartController extends Controller
{
    public function index()
    {
        return response()->json(Cart::all());
    }

    public function store(CartRequest $request)
    {
        $result = Cart::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Cart $Cart)
    {
        return response()->json($Cart);
    }

    public function update(CartRequest $request, Cart $Cart)
    {
        $Cart->update($request->validated());
        return response()->json($Cart->id);
    }

    public function destroy(Cart $Cart)
    {
        $Cart->delete();
        return response()->json($Cart->id);
    }
}
