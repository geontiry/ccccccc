<?php

namespace App\Http\Controllers\Adm\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\EmploymentRequest;
use App\Models\Employee\Employment;

class EmploymentController extends Controller
{
    public function index()
    {
        return response()->json(Employment::all());
    }

    public function store(EmploymentRequest $request)
    {
        $result = Employment::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Employment $Employment)
    {
        return response()->json($Employment);
    }

    public function update(EmploymentRequest $request, Employment $Employment)
    {
        $Employment->update($request->validated());
        return response()->json($Employment->id);
    }

    public function destroy(Employment $Employment)
    {
        $Employment->delete();
        return response()->json($Employment->id);
    }
}
