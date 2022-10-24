<?php

namespace App\Http\Controllers\Adm\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\PortalRequest;
use App\Models\Employee\Portal;

class PortalController extends Controller
{
    public function index()
    {
        return response()->json(Portal::all());
    }

    public function store(PortalRequest $request)
    {
        $result = Portal::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Portal $Portal)
    {
        return response()->json($Portal);
    }

    public function update(PortalRequest $request, Portal $Portal)
    {
        $Portal->update($request->validated());
        return response()->json($Portal->id);
    }

    public function destroy(Portal $Portal)
    {
        $Portal->delete();
        return response()->json($Portal->id);
    }
}
