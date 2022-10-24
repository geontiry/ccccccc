<?php

namespace App\Http\Controllers\Adm\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\ProcurementRequest;
use App\Models\Inventory\Procurement;

class ProcurementController extends Controller
{
    public function index()
    {
        return response()->json(Procurement::all());
    }

    public function store(ProcurementRequest $request)
    {
        $result = Procurement::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Procurement $Procurement)
    {
        return response()->json($Procurement);
    }

    public function update(ProcurementRequest $request, Procurement $Procurement)
    {
        $Procurement->update($request->validated());
        return response()->json($Procurement->id);
    }

    public function destroy(Procurement $Procurement)
    {
        $Procurement->delete();
        return response()->json($Procurement->id);
    }
}
