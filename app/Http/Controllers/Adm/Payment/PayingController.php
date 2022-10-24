<?php

namespace App\Http\Controllers\Adm\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\PayingRequest;
use App\Models\Payment\Paying;

class PayingController extends Controller
{
    public function index()
    {
        return response()->json(Paying::all());
    }

    public function store(PayingRequest $request)
    {
        $result = Paying::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Paying $Paying)
    {
        return response()->json($Paying);
    }

    public function update(PayingRequest $request, Paying $Paying)
    {
        $Paying->update($request->validated());
        return response()->json($Paying->id);
    }

    public function destroy(Paying $Paying)
    {
        $Paying->delete();
        return response()->json($Paying->id);
    }
}
