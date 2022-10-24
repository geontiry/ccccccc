<?php

namespace App\Http\Controllers\Adm\Sale;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sale\ReplaceRequest;
use App\Models\Sale\Replace;

class ReplaceController extends Controller
{
    public function index()
    {
        return response()->json(Replace::all());
    }

    public function store(ReplaceRequest $request)
    {
        $result = Replace::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Replace $Replace)
    {
        return response()->json($Replace);
    }

    public function update(ReplaceRequest $request, Replace $Replace)
    {
        $Replace->update($request->validated());
        return response()->json($Replace->id);
    }

    public function destroy(Replace $Replace)
    {
        $Replace->delete();
        return response()->json($Replace->id);
    }
}
