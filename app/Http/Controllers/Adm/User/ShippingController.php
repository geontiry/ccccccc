<?php

namespace App\Http\Controllers\Adm\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ShippingRequest;
use App\Models\User\Shipping;

class ShippingController extends Controller
{
    public function index()
    {
        return response()->json(Shipping::all());
    }

    public function store(ShippingRequest $request)
    {
        $result = Shipping::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Shipping $Shipping)
    {
        return response()->json($Shipping);
    }

    public function update(ShippingRequest $request, Shipping $Shipping)
    {
        $Shipping->update($request->validated());
        return response()->json($Shipping->id);
    }

    public function destroy(Shipping $Shipping)
    {
        $Shipping->delete();
        return response()->json($Shipping->id);
    }
}
