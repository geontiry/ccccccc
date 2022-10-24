<?php

namespace App\Http\Controllers\Adm\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\TillingRequest;
use App\Models\Payment\Tilling;

class TillingController extends Controller
{
    public function index()
    {
        return response()->json(Tilling::all());
    }

    public function store(TillingRequest $request)
    {
        $result = Tilling::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Tilling $Tilling)
    {
        return response()->json($Tilling);
    }

    public function update(TillingRequest $request, Tilling $Tilling)
    {
        $Tilling->update($request->validated());
        return response()->json($Tilling->id);
    }

    public function destroy(Tilling $Tilling)
    {
        $Tilling->delete();
        return response()->json($Tilling->id);
    }
}
