<?php

namespace App\Http\Controllers\Adm\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\DirectorateRequest;
use App\Models\Company\Directorate;

class DirectorateController extends Controller
{
    public function index()
    {
        return response()->json(Directorate::all());
    }

    public function store(DirectorateRequest $request)
    {
        $result = Directorate::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Directorate $directorate)
    {
        return response()->json($directorate);
    }

    public function update(DirectorateRequest $request, Directorate $directorate)
    {
        $directorate->update($request->validated());
        return response()->json($directorate->id);
    }

    public function destroy(Directorate $directorate)
    {
        $directorate->delete();
        return response()->json($directorate->id);
    }
}
