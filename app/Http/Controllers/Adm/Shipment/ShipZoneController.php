<?php

namespace App\Http\Controllers\Adm\Shipment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shipment\ShipZoneRequest;
use App\Models\Shipment\ShipZone;

class ShipZoneController extends Controller
{
    public function index()
    {
        return response()->json(ShipZone::all());
    }

    public function store(ShipZoneRequest $request)
    {
        $result = ShipZone::create($request->validated());
        return response()->json($result->id);
    }

    public function show(ShipZone $ShipZone)
    {
        return response()->json($ShipZone);
    }

    public function update(ShipZoneRequest $request, ShipZone $ShipZone)
    {
        $ShipZone->update($request->validated());
        return response()->json($ShipZone->id);
    }

    public function destroy(ShipZone $ShipZone)
    {
        $ShipZone->delete();
        return response()->json($ShipZone->id);
    }
}
