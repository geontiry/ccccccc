<?php

namespace App\Http\Controllers\Adm\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\InvoicingRequest;
use App\Models\Inventory\Invoicing;

class InvoicingController extends Controller
{
    public function index()
    {
        return response()->json(Invoicing::all());
    }

    public function store(InvoicingRequest $request)
    {
        $result = Invoicing::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Invoicing $Invoicing)
    {
        return response()->json($Invoicing);
    }

    public function update(InvoicingRequest $request, Invoicing $Invoicing)
    {
        $Invoicing->update($request->validated());
        return response()->json($Invoicing->id);
    }

    public function destroy(Invoicing $Invoicing)
    {
        $Invoicing->delete();
        return response()->json($Invoicing->id);
    }
}
