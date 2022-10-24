<?php

namespace App\Http\Controllers\Adm\Asset;

use App\Http\Controllers\Controller;
use App\Http\Requests\Asset\PosRequest;
use App\Models\Asset\Pos;

class PosController extends Controller
{
    public function index()
    {
        return response()->json(Pos::all());
    }

    public function store(PosRequest $request)
    {
        $result = Pos::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Pos $Pos)
    {
        return response()->json($Pos);
    }

    public function update(PosRequest $request, Pos $Pos)
    {
        $Pos->update($request->validated());
        return response()->json($Pos->id);
    }

    public function destroy(Pos $Pos)
    {
        $Pos->delete();
        return response()->json($Pos->id);
    }
}
