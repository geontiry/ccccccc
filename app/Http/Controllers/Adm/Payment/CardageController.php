<?php

namespace App\Http\Controllers\Adm\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\CardageRequest;
use App\Models\Payment\Cardage;

class CardageController extends Controller
{
    public function index()
    {
        return response()->json(Cardage::all());
    }

    public function store(CardageRequest $request)
    {
        $result = Cardage::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Cardage $Cardage)
    {
        return response()->json($Cardage);
    }

    public function update(CardageRequest $request, Cardage $Cardage)
    {
        $Cardage->update($request->validated());
        return response()->json($Cardage->id);
    }

    public function destroy(Cardage $Cardage)
    {
        $Cardage->delete();
        return response()->json($Cardage->id);
    }
}
