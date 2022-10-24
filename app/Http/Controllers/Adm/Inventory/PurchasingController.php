<?php

namespace App\Http\Controllers\Adm\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\PurchasingRequest;
use App\Models\Inventory\Purchasing;

class PurchasingController extends Controller
{
    public function index()
    {
        return response()->json(Purchasing::all());
    }

    public function store(PurchasingRequest $request)
    {
        $result = Purchasing::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Purchasing $Purchasing)
    {
        return response()->json($Purchasing);
    }

    public function update(PurchasingRequest $request, Purchasing $Purchasing)
    {
        $Purchasing->update($request->validated());
        return response()->json($Purchasing->id);
    }

    public function destroy(Purchasing $Purchasing)
    {
        $Purchasing->delete();
        return response()->json($Purchasing->id);
    }
}
