<?php

namespace App\Http\Controllers\Adm\Career;

use App\Http\Controllers\Controller;
use App\Http\Requests\Career\CareerRequest;
use App\Models\Career\Career;

class CareerController extends Controller
{
    public function index()
    {
        return response()->json(Career::all());
    }

    public function store(CareerRequest $request)
    {
        $result = Career::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Career $Career)
    {
        return response()->json($Career);
    }

    public function update(CareerRequest $request, Career $Career)
    {
        $Career->update($request->validated());
        return response()->json($Career->id);
    }

    public function destroy(Career $Career)
    {
        $Career->delete();
        return response()->json($Career->id);
    }
}
