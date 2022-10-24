<?php

namespace App\Http\Controllers\Adm\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ModuleRequest;
use App\Models\Dashboard\Module;

class ModuleController extends Controller
{
    public function index()
    {
        return response()->json(Module::all());
    }

    public function store(ModuleRequest $request)
    {
        $result = Module::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Module $Module)
    {
        return response()->json($Module);
    }

    public function update(ModuleRequest $request, Module $Module)
    {
        $Module->update($request->validated());
        return response()->json($Module->id);
    }

    public function destroy(Module $Module)
    {
        $Module->delete();
        return response()->json($Module->id);
    }
}
