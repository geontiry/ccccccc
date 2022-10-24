<?php

namespace App\Http\Controllers\Adm\Career;

use App\Http\Controllers\Controller;
use App\Http\Requests\Career\WorkplanRequest;
use App\Models\Career\Workplan;

class WorkplanController extends Controller
{
    public function index()
    {
        return response()->json(Workplan::all());
    }

    public function store(WorkplanRequest $request)
    {
        $result = Workplan::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Workplan $Workplan)
    {
        return response()->json($Workplan);
    }

    public function update(WorkplanRequest $request, Workplan $Workplan)
    {
        $Workplan->update($request->validated());
        return response()->json($Workplan->id);
    }

    public function destroy(Workplan $Workplan)
    {
        $Workplan->delete();
        return response()->json($Workplan->id);
    }
}
