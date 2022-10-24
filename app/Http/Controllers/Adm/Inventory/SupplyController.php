<?php

namespace App\Http\Controllers\Adm\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\SupplyRequest;
use App\Models\Inventory\Supply;

class SupplyController extends Controller
{
    public function index()
    {
        return response()->json(Supply::all());
    }

    public function store(SupplyRequest $request)
    {
        $result = Supply::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Supply $Supply)
    {
        return response()->json($Supply);
    }

    public function update(SupplyRequest $request, Supply $Supply)
    {
        $Supply->update($request->validated());
        return response()->json($Supply->id);
    }

    public function destroy(Supply $Supply)
    {
        $Supply->delete();
        return response()->json($Supply->id);
    }
}
