<?php

namespace App\Http\Controllers\Adm\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\TerminationRequest;
use App\Models\Employee\Termination;

class TerminationController extends Controller
{
    public function index()
    {
        return response()->json(Termination::all());
    }

    public function store(TerminationRequest $request)
    {
        $result = Termination::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Termination $Termination)
    {
        return response()->json($Termination);
    }

    public function update(TerminationRequest $request, Termination $Termination)
    {
        $Termination->update($request->validated());
        return response()->json($Termination->id);
    }

    public function destroy(Termination $Termination)
    {
        $Termination->delete();
        return response()->json($Termination->id);
    }
}
