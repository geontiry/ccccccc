<?php

namespace App\Http\Controllers\Adm\Catalogue;

use App\Http\Controllers\Controller;
use App\Http\Requests\Catalogue\BrandRequest;
use App\Models\Catalogue\Brand;

class BrandController extends Controller
{
    public function index()
    {
        return response()->json(Brand::all());
    }

    public function store(BrandRequest $request)
    {
        $result = Brand::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Brand $Brand)
    {
        return response()->json($Brand);
    }

    public function update(BrandRequest $request, Brand $Brand)
    {
        $Brand->update($request->validated());
        return response()->json($Brand->id);
    }

    public function destroy(Brand $Brand)
    {
        $Brand->delete();
        return response()->json($Brand->id);
    }
}
