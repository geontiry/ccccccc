<?php

namespace App\Http\Controllers\Adm\Asset;

use App\Http\Controllers\Controller;
use App\Http\Requests\Asset\WarehouseRequest;
use App\Models\Asset\Warehouse;

class WarehouseController extends Controller
{
    public function index()
    {
        return response()->json(Warehouse::all());
    }

    public function store(WarehouseRequest $request)
    {
        $result = Warehouse::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Warehouse $Warehouse)
    {
        return response()->json($Warehouse);
    }

    public function update(WarehouseRequest $request, Warehouse $Warehouse)
    {
        $Warehouse->update($request->validated());
        return response()->json($Warehouse->id);
    }

    public function destroy(Warehouse $Warehouse)
    {
        $Warehouse->delete();
        return response()->json($Warehouse->id);
    }
}
