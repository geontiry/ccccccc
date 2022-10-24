<?php

namespace App\Http\Controllers\Adm\Location;

use App\Http\Controllers\Controller;
use App\Http\Requests\Location\LocationRequest;
use App\Models\Location\Location;

class LocationController extends Controller
{
    public function index()
    {
        return response()->json(Location::all());
    }

    public function store(LocationRequest $request)
    {
        $result = Location::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Location $Location)
    {
        return response()->json($Location);
    }

    public function update(LocationRequest $request, Location $Location)
    {
        $Location->update($request->validated());
        return response()->json($Location->id);
    }

    public function destroy(Location $Location)
    {
        $Location->delete();
        return response()->json($Location->id);
    }
}
