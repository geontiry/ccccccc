<?php

namespace App\Http\Controllers\Adm\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\InventoryRequest;
use App\Models\Inventory\Inventory;

class InventoryController extends Controller
{
    public function index()
    {
        return response()->json(Inventory::all());
    }

    public function store(InventoryRequest $request)
    {
        $result = Inventory::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Inventory $Inventory)
    {
        return response()->json($Inventory);
    }

    public function update(InventoryRequest $request, Inventory $Inventory)
    {
        $Inventory->update($request->validated());
        return response()->json($Inventory->id);
    }

    public function destroy(Inventory $Inventory)
    {
        $Inventory->delete();
        return response()->json($Inventory->id);
    }
}
