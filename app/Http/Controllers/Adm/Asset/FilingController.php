<?php

namespace App\Http\Controllers\Adm\Asset;

use App\Http\Controllers\Controller;
use App\Http\Requests\Asset\FilingRequest;
use App\Models\Asset\Filing;

class FilingController extends Controller
{
    public function index()
    {
        return response()->json(Filing::all());
    }

    public function store(FilingRequest $request)
    {
        $result = Filing::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Filing $Filing)
    {
        return response()->json($Filing);
    }

    public function update(FilingRequest $request, Filing $Filing)
    {
        $Filing->update($request->validated());
        return response()->json($Filing->id);
    }

    public function destroy(Filing $Filing)
    {
        $Filing->delete();
        return response()->json($Filing->id);
    }
}
