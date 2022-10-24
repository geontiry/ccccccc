<?php

namespace App\Http\Controllers\Adm\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\CashageRequest;
use App\Models\Payment\Cashage;

class CashageController extends Controller
{
    public function index()
    {
        return response()->json(Cashage::all());
    }

    public function store(CashageRequest $request)
    {
        $result = Cashage::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Cashage $Cashage)
    {
        return response()->json($Cashage);
    }

    public function update(CashageRequest $request, Cashage $Cashage)
    {
        $Cashage->update($request->validated());
        return response()->json($Cashage->id);
    }

    public function destroy(Cashage $Cashage)
    {
        $Cashage->delete();
        return response()->json($Cashage->id);
    }
}
