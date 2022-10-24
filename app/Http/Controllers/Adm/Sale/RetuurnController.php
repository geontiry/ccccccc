<?php

namespace App\Http\Controllers\Adm\Sale;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sale\RetuurnRequest;
use App\Models\Sale\Retuurn;

class RetuurnController extends Controller
{
    public function index()
    {
        return response()->json(Retuurn::all());
    }

    public function store(RetuurnRequest $request)
    {
        $result = Retuurn::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Retuurn $Retuurn)
    {
        return response()->json($Retuurn);
    }

    public function update(RetuurnRequest $request, Retuurn $Retuurn)
    {
        $Retuurn->update($request->validated());
        return response()->json($Retuurn->id);
    }

    public function destroy(Retuurn $Retuurn)
    {
        $Retuurn->delete();
        return response()->json($Retuurn->id);
    }
}
