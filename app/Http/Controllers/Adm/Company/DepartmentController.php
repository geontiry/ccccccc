<?php

namespace App\Http\Controllers\Adm\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\DepartmentRequest;
use App\Models\Company\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        return response()->json(Department::all());
    }

    public function store(DepartmentRequest $request)
    {
        $result = Department::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Department $department)
    {
        return response()->json($department);
    }

    public function update(DepartmentRequest $request, Department $department)
    {
        $department->update($request->validated());
        return response()->json($department->id);
    }

    public function destroy(Department $department)
    {
        $department->delete();
        return response()->json($department->id);
    }
}
