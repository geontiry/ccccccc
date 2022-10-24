<?php

namespace App\Http\Controllers\Adm\Catalogue; 

use App\Http\Controllers\Controller;
use App\Http\Requests\Catalogue\CategoryRequest;
use App\Models\Catalogue\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return response()->json(Category::all());
    }

    public function store(CategoryRequest $request)
    {
        $result = Category::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Category $Category)
    {
        return response()->json($Category);
    }

    public function update(CategoryRequest $request, Category $Category)
    {
        $Category->update($request->validated());
        return response()->json($Category->id);
    }

    public function destroy(Category $Category)
    {
        $Category->delete();
        return response()->json($Category->id);
    }
}
