<?php

namespace App\Http\Controllers\Adm\Catalogue;

use App\Http\Controllers\Controller;
use App\Http\Requests\Catalogue\FeatureRequest;
use App\Models\Catalogue\Feature;

class FeatureController extends Controller
{
    public function index()
    {
        return response()->json(Feature::all());
    }

    public function store(FeatureRequest $request)
    {
        $result = Feature::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Feature $Feature)
    {
        return response()->json($Feature);
    }

    public function update(FeatureRequest $request, Feature $Feature)
    {
        $Feature->update($request->validated());
        return response()->json($Feature->id);
    }

    public function destroy(Feature $Feature)
    {
        $Feature->delete();
        return response()->json($Feature->id);
    }
}
