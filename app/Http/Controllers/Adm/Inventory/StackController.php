<?php

namespace App\Http\Controllers\Adm\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\StackRequest;
use App\Models\Inventory\Stack;

class StackController extends Controller
{
    public function index()
    {
        return response()->json(Stack::all());
    }

    public function store(StackRequest $request)
    {
        $result = Stack::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Stack $Stack)
    {
        return response()->json($Stack);
    }

    public function update(StackRequest $request, Stack $Stack)
    {
        $Stack->update($request->validated());
        return response()->json($Stack->id);
    }

    public function destroy(Stack $Stack)
    {
        $Stack->delete();
        return response()->json($Stack->id);
    }
}
