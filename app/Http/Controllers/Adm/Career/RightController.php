<?php

namespace App\Http\Controllers\Adm\Career;

use App\Http\Controllers\Controller;
use App\Http\Requests\Career\RightRequest;
use App\Models\Career\Right;

class RightController extends Controller
{
    public function index()
    {
        return response()->json(Right::all());
    }

    public function store(RightRequest $request)
    {
        $result = Right::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Right $Right)
    {
        return response()->json($Right);
    }

    public function update(RightRequest $request, Right $Right)
    {
        $Right->update($request->validated());
        return response()->json($Right->id);
    }

    public function destroy(Right $Right)
    {
        $Right->delete();
        return response()->json($Right->id);
    }
}
