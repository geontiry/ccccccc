<?php

namespace App\Http\Controllers\Adm\Location;

use App\Http\Controllers\Controller;

use App\Http\Requests\Location\DemographRequest;
use App\Models\Location\Demograph;

class DemographController extends Controller
{
    public function index()
    {
        return response()->json(Demograph::all());
    }

    public function store(DemographRequest $request)
    {
        $result = Demograph::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Demograph $demograph)
    {
        return response()->json($demograph);
    }

    public function update(DemographRequest $request, Demograph $demograph)
    {
        $demograph->update($request->validated());
        return response()->json($demograph->id);
    }

    public function destroy(Demograph $demograph)
    {
        $demograph->delete();
        return response()->json($demograph->id);
    }
}
