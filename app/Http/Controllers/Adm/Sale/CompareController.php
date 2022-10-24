<?php

namespace App\Http\Controllers\Adm\Sale;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sale\CompareRequest;
use App\Models\Sale\Compare;

class CompareController extends Controller
{
    public function index()
    {
        return response()->json(Compare::all());
    }

    public function store(CompareRequest $request)
    {
        $result = Compare::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Compare $Compare)
    {
        return response()->json($Compare);
    }

    public function update(CompareRequest $request, Compare $Compare)
    {
        $Compare->update($request->validated());
        return response()->json($Compare->id);
    }

    public function destroy(Compare $Compare)
    {
        $Compare->delete();
        return response()->json($Compare->id);
    }
}
