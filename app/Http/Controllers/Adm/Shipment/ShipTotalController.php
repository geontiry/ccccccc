<?php

namespace App\Http\Controllers\Adm\Shipment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shipment\ShipTotalRequest;
use App\Models\Shipment\ShipTotal;

class ShipTotalController extends Controller
{
    public function index()
    {
        return response()->json(ShipTotal::all());
    }

    public function store(ShipTotalRequest $request)
    {
        $result = ShipTotal::create($request->validated());
        return response()->json($result->id);
    }

    public function show(ShipTotal $ShipTotal)
    {
        return response()->json($ShipTotal);
    }

    public function update(ShipTotalRequest $request, ShipTotal $ShipTotal)
    {
        $ShipTotal->update($request->validated());
        return response()->json($ShipTotal->id);
    }

    public function destroy(ShipTotal $ShipTotal)
    {
        $ShipTotal->delete();
        return response()->json($ShipTotal->id);
    }
}
