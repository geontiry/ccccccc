<?php

namespace App\Http\Controllers\Adm\Location;

use App\Http\Controllers\Controller;
use App\Http\Requests\Location\RegionRequest;
use App\Models\Location\Region;

class RegionController extends Controller
{
    public function index()
    {
        return response()->json(Region::all());
    }

    public function store(RegionRequest $request)
    {
        $result = Region::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Region $region)
    {
        return response()->json($region);
    }

    public function update(RegionRequest $request, Region $region)
    {
        $region->update($request->validated());
        return response()->json($region->id);
    }

    public function destroy(Region $region)
    {
        $region->delete();
        return response()->json($region->id);
    }
}
