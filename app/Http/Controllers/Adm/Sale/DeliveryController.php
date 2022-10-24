<?php

namespace App\Http\Controllers\Adm\Sale;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sale\DeliveryRequest;
use App\Models\Sale\Delivery;

class DeliveryController extends Controller
{
    public function index()
    {
        return response()->json(Delivery::all());
    }

    public function store(DeliveryRequest $request)
    {
        $result = Delivery::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Delivery $Delivery)
    {
        return response()->json($Delivery);
    }

    public function update(DeliveryRequest $request, Delivery $Delivery)
    {
        $Delivery->update($request->validated());
        return response()->json($Delivery->id);
    }

    public function destroy(Delivery $Delivery)
    {
        $Delivery->delete();
        return response()->json($Delivery->id);
    }
}
