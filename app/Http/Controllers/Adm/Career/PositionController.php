<?php

namespace App\Http\Controllers\Adm\Career;

use App\Http\Controllers\Controller;
use App\Http\Requests\Career\PositionRequest;
use App\Models\Career\Position;

class PositionController extends Controller
{
    public function index()
    {
        return response()->json(Position::all());
    }

    public function store(PositionRequest $request)
    {
        $result = Position::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Position $Position)
    {
        return response()->json($Position);
    }

    public function update(PositionRequest $request, Position $Position)
    {
        $Position->update($request->validated());
        return response()->json($Position->id);
    }

    public function destroy(Position $Position)
    {
        $Position->delete();
        return response()->json($Position->id);
    }
}
