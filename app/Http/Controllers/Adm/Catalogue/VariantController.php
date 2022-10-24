<?php

namespace App\Http\Controllers\Adm\Catalogue;

use App\Http\Controllers\Controller;
use App\Http\Requests\Catalogue\VariantRequest;
use App\Models\Catalogue\Variant;

class VariantController extends Controller
{
    public function index()
    {
        return response()->json(Variant::all());
    }

    public function store(VariantRequest $request)
    {
        $result = Variant::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Variant $Variant)
    {
        return response()->json($Variant);
    }

    public function update(VariantRequest $request, Variant $Variant)
    {
        $Variant->update($request->validated());
        return response()->json($Variant->id);
    }

    public function destroy(Variant $Variant)
    {
        $Variant->delete();
        return response()->json($Variant->id);
    }
}
