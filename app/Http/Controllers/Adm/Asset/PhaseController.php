<?php

namespace App\Http\Controllers\Adm\Asset;

use App\Http\Controllers\Controller;
use App\Http\Requests\Asset\PhaseRequest;
use App\Models\Asset\Phase;

class PhaseController extends Controller
{
    public function index()
    {
        return response()->json(Phase::all());
    }

    public function store(PhaseRequest $request)
    {
        $result = Phase::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Phase $Phase)
    {
        return response()->json($Phase);
    }

    public function update(PhaseRequest $request, Phase $Phase)
    {
        $Phase->update($request->validated());
        return response()->json($Phase->id);
    }

    public function destroy(Phase $Phase)
    {
        $Phase->delete();
        return response()->json($Phase->id);
    }
}
