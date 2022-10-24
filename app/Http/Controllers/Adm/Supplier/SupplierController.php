<?php

namespace App\Http\Controllers\Adm\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supplier\SupplierRequest;
use App\Models\Supplier\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        return response()->json(Supplier::all());
    }

    public function store(SupplierRequest $request)
    {
        $result = Supplier::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Supplier $Supplier)
    {
        return response()->json($Supplier);
    }

    public function update(SupplierRequest $request, Supplier $Supplier)
    {
        $Supplier->update($request->validated());
        return response()->json($Supplier->id);
    }

    public function destroy(Supplier $Supplier)
    {
        $Supplier->delete();
        return response()->json($Supplier->id);
    }
}
