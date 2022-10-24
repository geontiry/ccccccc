<?php

namespace App\Http\Controllers\Adm\Shipment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shipment\ShipRateRequest;
use App\Models\Shipment\ShipRate;

class ShipRateController extends Controller
{
    public function index()
    {
        return response()->json(ShipRate::all());
    }

    public function store(ShipRateRequest $request)
    {
        $result = ShipRate::create($request->validated());
        return response()->json($result->id);
    }

    public function show(ShipRate $ShipRate)
    {
        return response()->json($ShipRate);
    }

    public function update(ShipRateRequest $request, ShipRate $ShipRate)
    {
        $ShipRate->update($request->validated());
        return response()->json($ShipRate->id);
    }

    public function destroy(ShipRate $ShipRate)
    {
        $ShipRate->delete();
        return response()->json($ShipRate->id);
    }
}
