<?php

namespace App\Http\Controllers\Adm\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\EmpEducationRequest;
use App\Models\Employee\EmpEducation;

class EmpEducationController extends Controller
{
    public function index()
    {
        return response()->json(EmpEducation::all());
    }

    public function store(EmpEducationRequest $request)
    {
        $result = EmpEducation::create($request->validated());
        return response()->json($result->id);
    }

    public function show(EmpEducation $EmpEducation)
    {
        return response()->json($EmpEducation);
    }

    public function update(EmpEducationRequest $request, EmpEducation $EmpEducation)
    {
        $EmpEducation->update($request->validated());
        return response()->json($EmpEducation->id);
    }

    public function destroy(EmpEducation $EmpEducation)
    {
        $EmpEducation->delete();
        return response()->json($EmpEducation->id);
    }
}
