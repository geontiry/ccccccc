<?php

namespace App\Http\Controllers\Adm\Sale;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sale\OrderRequest;
use App\Models\Sale\Order;

class OrderController extends Controller
{
    public function index()
    {
        return response()->json(Order::all());
    }

    public function store(OrderRequest $request)
    {
        $result = Order::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Order $Order)
    {
        return response()->json($Order);
    }

    public function update(OrderRequest $request, Order $Order)
    {
        $Order->update($request->validated());
        return response()->json($Order->id);
    }

    public function destroy(Order $Order)
    {
        $Order->delete();
        return response()->json($Order->id);
    }
}
