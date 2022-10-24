<?php

namespace App\Http\Controllers\Adm\Career;

use App\Http\Controllers\Controller;
use App\Http\Requests\Career\RoleRequest;
use App\Models\Career\Role;

class RoleController extends Controller
{
    public function index()
    {
        return response()->json(Role::all());
    }

    public function store(RoleRequest $request)
    {
        $result = Role::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Role $Role)
    {
        return response()->json($Role);
    }

    public function update(RoleRequest $request, Role $Role)
    {
        $Role->update($request->validated());
        return response()->json($Role->id);
    }

    public function destroy(Role $Role)
    {
        $Role->delete();
        return response()->json($Role->id);
    }
}
