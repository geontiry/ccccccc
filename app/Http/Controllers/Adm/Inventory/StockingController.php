<?php

namespace App\Http\Controllers\Adm\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\StockingRequest;
use App\Models\Inventory\Stocking;

class StockingController extends Controller
{
    public function index()
    {
        return response()->json(Stocking::all());
    }

    public function store(StockingRequest $request)
    {
        $result = Stocking::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Stocking $Stocking)
    {
        return response()->json($Stocking);
    }

    public function update(StockingRequest $request, Stocking $Stocking)
    {
        $Stocking->update($request->validated());
        return response()->json($Stocking->id);
    }

    public function destroy(Stocking $Stocking)
    {
        $Stocking->delete();
        return response()->json($Stocking->id);
    }
}
