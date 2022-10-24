<?php

namespace App\Http\Controllers\Adm\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\EmpKinshipRequest;
use App\Models\Employee\EmpKinship;

class EmpKinshipController extends Controller
{
    public function index()
    {
        return response()->json(EmpKinship::all());
    }

    public function store(EmpKinshipRequest $request)
    {
        $result = EmpKinship::create($request->validated());
        return response()->json($result->id);
    }

    public function show(EmpKinship $EmpKinship)
    {
        return response()->json($EmpKinship);
    }

    public function update(EmpKinshipRequest $request, EmpKinship $EmpKinship)
    {
        $EmpKinship->update($request->validated());
        return response()->json($EmpKinship->id);
    }

    public function destroy(EmpKinship $EmpKinship)
    {
        $EmpKinship->delete();
        return response()->json($EmpKinship->id);
    }
}
