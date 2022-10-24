<?php

namespace App\Http\Controllers\Adm\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\StockageRequest;
use App\Models\Inventory\Stockage;

class StockageController extends Controller
{
    public function index()
    {
        return response()->json(Stockage::all());
    }

    public function store(StockageRequest $request)
    {
        $result = Stockage::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Stockage $Stockage)
    {
        return response()->json($Stockage);
    }

    public function update(StockageRequest $request, Stockage $Stockage)
    {
        $Stockage->update($request->validated());
        return response()->json($Stockage->id);
    }

    public function destroy(Stockage $Stockage)
    {
        $Stockage->delete();
        return response()->json($Stockage->id);
    }
}
