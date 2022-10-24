<?php

namespace App\Http\Controllers\Adm\Catalogue;

use App\Http\Controllers\Controller;
use App\Http\Requests\Catalogue\ProductRequest;
use App\Models\Catalogue\Product;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json(Product::all());
    }

    public function store(ProductRequest $request)
    {
        $result = Product::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Product $Product)
    {
        return response()->json($Product);
    }

    public function update(ProductRequest $request, Product $Product)
    {
        $Product->update($request->validated());
        return response()->json($Product->id);
    }

    public function destroy(Product $Product)
    {
        $Product->delete();
        return response()->json($Product->id);
    }
}
