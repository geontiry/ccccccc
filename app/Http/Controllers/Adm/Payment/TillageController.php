<?php

namespace App\Http\Controllers\Adm\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\TillageRequest;
use App\Models\Payment\Tillage;

class TillageController extends Controller
{
    public function index()
    {
        return response()->json(Tillage::all());
    }

    public function store(TillageRequest $request)
    {
        $result = Tillage::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Tillage $Tillage)
    {
        return response()->json($Tillage);
    }

    public function update(TillageRequest $request, Tillage $Tillage)
    {
        $Tillage->update($request->validated());
        return response()->json($Tillage->id);
    }

    public function destroy(Tillage $Tillage)
    {
        $Tillage->delete();
        return response()->json($Tillage->id);
    }
}
