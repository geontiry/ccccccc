<?php

namespace App\Http\Controllers\Adm\Career;

use App\Http\Controllers\Controller;
use App\Http\Requests\Career\RemunerationRequest;
use App\Models\Career\Remuneration;

class RemunerationController extends Controller
{
    public function index()
    {
        return response()->json(Remuneration::all());
    }

    public function store(RemunerationRequest $request)
    {
        $result = Remuneration::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Remuneration $Remuneration)
    {
        return response()->json($Remuneration);
    }

    public function update(RemunerationRequest $request, Remuneration $Remuneration)
    {
        $Remuneration->update($request->validated());
        return response()->json($Remuneration->id);
    }

    public function destroy(Remuneration $Remuneration)
    {
        $Remuneration->delete();
        return response()->json($Remuneration->id);
    }
}
