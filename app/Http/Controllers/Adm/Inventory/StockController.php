<?php

namespace App\Http\Controllers\Adm\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\StockRequest;
use App\Models\Inventory\Stock;

class StockController extends Controller
{
    public function index()
    {
        return response()->json(Stock::all());
    }

    public function store(StockRequest $request)
    {
        $result = Stock::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Stock $Stock)
    {
        return response()->json($Stock);
    }

    public function update(StockRequest $request, Stock $Stock)
    {
        $Stock->update($request->validated());
        return response()->json($Stock->id);
    }

    public function destroy(Stock $Stock)
    {
        $Stock->delete();
        return response()->json($Stock->id);
    }
}
