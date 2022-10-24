<?php

namespace App\Http\Controllers\Adm\Asset;

use App\Http\Controllers\Controller;
use App\Http\Requests\Asset\FacilityRequest;
use App\Models\Asset\Facility;

class FacilityController extends Controller
{
    public function index()
    {
        return response()->json(Facility::all());
    }

    public function store(FacilityRequest $request)
    {
        $result = Facility::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Facility $Facility)
    {
        return response()->json($Facility);
    }

    public function update(FacilityRequest $request, Facility $Facility)
    {
        $Facility->update($request->validated());
        return response()->json($Facility->id);
    }

    public function destroy(Facility $Facility)
    {
        $Facility->delete();
        return response()->json($Facility->id);
    }
}
