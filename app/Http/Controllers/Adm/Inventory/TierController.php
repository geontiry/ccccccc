<?php

namespace App\Http\Controllers\Adm\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\TierRequest;
use App\Models\Inventory\Tier;

class TierController extends Controller
{
    public function index()
    {
        return response()->json(Tier::all());
    }

    public function store(TierRequest $request)
    {
        $result = Tier::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Tier $Tier)
    {
        return response()->json($Tier);
    }

    public function update(TierRequest $request, Tier $Tier)
    {
        $Tier->update($request->validated());
        return response()->json($Tier->id);
    }

    public function destroy(Tier $Tier)
    {
        $Tier->delete();
        return response()->json($Tier->id);
    }
}
