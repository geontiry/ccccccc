<?php

namespace App\Http\Controllers\Adm\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\EmpExperienceRequest;
use App\Models\Employee\EmpExperience;

class EmpExperienceController extends Controller
{
    public function index()
    {
        return response()->json(EmpExperience::all());
    }

    public function store(EmpExperienceRequest $request)
    {
        $result = EmpExperience::create($request->validated());
        return response()->json($result->id);
    }

    public function show(EmpExperience $EmpExperience)
    {
        return response()->json($EmpExperience);
    }

    public function update(EmpExperienceRequest $request, EmpExperience $EmpExperience)
    {
        $EmpExperience->update($request->validated());
        return response()->json($EmpExperience->id);
    }

    public function destroy(EmpExperience $EmpExperience)
    {
        $EmpExperience->delete();
        return response()->json($EmpExperience->id);
    }
}
