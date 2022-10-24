<?php

namespace App\Http\Controllers\Adm\Career;

use App\Http\Controllers\Controller;
use App\Http\Requests\Career\BenefitRequest;
use App\Models\Career\Benefit;

class BenefitController extends Controller
{
    public function index()
    {
        return response()->json(Benefit::all());
    }

    public function store(BenefitRequest $request)
    {
        $result = Benefit::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Benefit $Benefit)
    {
        return response()->json($Benefit);
    }

    public function update(BenefitRequest $request, Benefit $Benefit)
    {
        $Benefit->update($request->validated());
        return response()->json($Benefit->id);
    }

    public function destroy(Benefit $Benefit)
    {
        $Benefit->delete();
        return response()->json($Benefit->id);
    }
}
