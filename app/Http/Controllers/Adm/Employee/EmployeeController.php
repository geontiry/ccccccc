<?php

namespace App\Http\Controllers\Adm\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\EmployeeRequest;
use App\Models\Employee\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return response()->json(Employee::all());
    }

    public function store(EmployeeRequest $request)
    {
        $result = Employee::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Employee $Employee)
    {
        return response()->json($Employee);
    }

    public function update(EmployeeRequest $request, Employee $Employee)
    {
        $Employee->update($request->validated());
        return response()->json($Employee->id);
    }

    public function destroy(Employee $Employee)
    {
        $Employee->delete();
        return response()->json($Employee->id);
    }
}
