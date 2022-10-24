<?php

namespace App\Http\Controllers\Adm\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\AgreementRequest;
use App\Models\Employee\Agreement;

class AgreementController extends Controller
{
    public function index()
    {
        return response()->json(Agreement::all());
    }

    public function store(AgreementRequest $request)
    {
        $result = Agreement::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Agreement $Agreement)
    {
        return response()->json($Agreement);
    }

    public function update(AgreementRequest $request, Agreement $Agreement)
    {
        $Agreement->update($request->validated());
        return response()->json($Agreement->id);
    }

    public function destroy(Agreement $Agreement)
    {
        $Agreement->delete();
        return response()->json($Agreement->id);
    }
}
