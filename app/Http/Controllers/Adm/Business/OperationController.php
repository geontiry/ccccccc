<?php

namespace App\Http\Controllers\Adm\Business;

use App\Http\Controllers\Controller;
use App\Http\Requests\Business\OperationRequest;
use App\Models\Business\Operation;

class OperationController extends Controller
{
    public function index()
    {
        return response()->json(Operation::all());
    }

    public function store(OperationRequest $request)
    {
        $result = Operation::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Operation $operation)
    {
        return response()->json($operation);
    }

    public function update(OperationRequest $request, Operation $operation)
    {
        $operation->update($request->validated());
        return response()->json($operation->id);
    }

    public function destroy(Operation $operation)
    {
        $operation->delete();
        return response()->json($operation->id);
    }
}
