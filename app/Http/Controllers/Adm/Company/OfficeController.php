<?php

namespace App\Http\Controllers\Adm\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\OfficeRequest;
use App\Models\Company\Office;

class OfficeController extends Controller
{
    public function index()
    {
        return response()->json(Office::all());
    }

    public function store(OfficeRequest $request)
    {
        $result = Office::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Office $office)
    {
        return response()->json($office);
    }

    public function update(OfficeRequest $request, Office $office)
    {
        $office->update($request->validated());
        return response()->json($office->id);
    }

    public function destroy(Office $office)
    {
        $office->delete();
        return response()->json($office->id);
    }
}
