<?php

namespace App\Http\Controllers\Adm\Shipment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shipment\ShipmentRequest;
use App\Models\Shipment\Shipment;

class ShipmentController extends Controller
{
    public function index()
    {
        return response()->json(Shipment::all());
    }

    public function store(ShipmentRequest $request)
    {
        $result = Shipment::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Shipment $Shipment)
    {
        return response()->json($Shipment);
    }

    public function update(ShipmentRequest $request, Shipment $Shipment)
    {
        $Shipment->update($request->validated());
        return response()->json($Shipment->id);
    }

    public function destroy(Shipment $Shipment)
    {
        $Shipment->delete();
        return response()->json($Shipment->id);
    }
}
