<?php

namespace App\Http\Controllers\Adm\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\SupplyingRequest;
use App\Models\Inventory\Supplying;

class SupplyingController extends Controller
{
    public function index()
    {
        return response()->json(Supplying::all());
    }

    public function store(SupplyingRequest $request)
    {
        $result = Supplying::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Supplying $Supplying)
    {
        return response()->json($Supplying);
    }

    public function update(SupplyingRequest $request, Supplying $Supplying)
    {
        $Supplying->update($request->validated());
        return response()->json($Supplying->id);
    }

    public function destroy(Supplying $Supplying)
    {
        $Supplying->delete();
        return response()->json($Supplying->id);
    }
}
