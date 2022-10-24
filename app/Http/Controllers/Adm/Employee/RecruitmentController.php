<?php

namespace App\Http\Controllers\Adm\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\RecruitmentRequest;
use App\Models\Employee\Recruitment;

class RecruitmentController extends Controller
{
    public function index()
    {
        return response()->json(Recruitment::all());
    }

    public function store(RecruitmentRequest $request)
    {
        $result = Recruitment::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Recruitment $Recruitment)
    {
        return response()->json($Recruitment);
    }

    public function update(RecruitmentRequest $request, Recruitment $Recruitment)
    {
        $Recruitment->update($request->validated());
        return response()->json($Recruitment->id);
    }

    public function destroy(Recruitment $Recruitment)
    {
        $Recruitment->delete();
        return response()->json($Recruitment->id);
    }
}
