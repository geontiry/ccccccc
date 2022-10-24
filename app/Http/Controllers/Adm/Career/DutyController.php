<?php

namespace App\Http\Controllers\Adm\Career;

use App\Http\Controllers\Controller;
use App\Http\Requests\Career\DutyRequest;
use App\Models\Career\Duty;

class DutyController extends Controller
{
    public function index()
    {
        return response()->json(Duty::all());
    }

    public function store(DutyRequest $request)
    {
        $result = Duty::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Duty $Duty)
    {
        return response()->json($Duty);
    }

    public function update(DutyRequest $request, Duty $Duty)
    {
        $Duty->update($request->validated());
        return response()->json($Duty->id);
    }

    public function destroy(Duty $Duty)
    {
        $Duty->delete();
        return response()->json($Duty->id);
    }
}
