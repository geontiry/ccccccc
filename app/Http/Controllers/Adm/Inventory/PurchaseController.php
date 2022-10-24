<?php

namespace App\Http\Controllers\Adm\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\PurchaseRequest;
use App\Models\Inventory\Purchase;

class PurchaseController extends Controller
{
    public function index()
    {
        return response()->json(Purchase::all());
    }

    public function store(PurchaseRequest $request)
    {
        $result = Purchase::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Purchase $Purchase)
    {
        return response()->json($Purchase);
    }

    public function update(PurchaseRequest $request, Purchase $Purchase)
    {
        $Purchase->update($request->validated());
        return response()->json($Purchase->id);
    }

    public function destroy(Purchase $Purchase)
    {
        $Purchase->delete();
        return response()->json($Purchase->id);
    }
}
