<?php

namespace App\Http\Controllers\Adm\Pricing;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pricing\PricingRequest;
use App\Models\Pricing\Pricing;

class PricingController extends Controller
{
    public function index()
    {
        return response()->json(Pricing::all());
    }

    public function store(PricingRequest $request)
    {
        $result = Pricing::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Pricing $Pricing)
    {
        return response()->json($Pricing);
    }

    public function update(PricingRequest $request, Pricing $Pricing)
    {
        $Pricing->update($request->validated());
        return response()->json($Pricing->id);
    }

    public function destroy(Pricing $Pricing)
    {
        $Pricing->delete();
        return response()->json($Pricing->id);
    }
}
