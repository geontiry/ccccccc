<?php

namespace App\Http\Controllers\Adm\Location;

use App\Http\Controllers\Controller;
use App\Http\Requests\Location\CountyRequest;
use App\Models\Location\County;

class CountyController extends Controller
{
    public function index()
    {
        return response()->json(County::all());
    }

    public function store(CountyRequest $request)
    {
        $result = County::create($request->validated());
        return response()->json($result->id);
    }

    public function show(County $county)
    {
        return response()->json($county);
    }

    public function update(CountyRequest $request, County $county)
    {
        $county->update($request->validated());
        return response()->json($county->id);
    }

    public function destroy(County $county)
    {
        $county->delete();
        return response()->json($county->id);
    }
}
