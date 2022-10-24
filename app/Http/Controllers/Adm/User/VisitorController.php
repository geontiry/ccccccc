<?php

namespace App\Http\Controllers\Adm\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\VisitorRequest;
use App\Models\User\Visitor;

class VisitorController extends Controller
{
    public function index()
    {
        return response()->json(Visitor::all());
    }

    public function store(VisitorRequest $request)
    {
        $result = Visitor::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Visitor $Visitor)
    {
        return response()->json($Visitor);
    }

    public function update(VisitorRequest $request, Visitor $Visitor)
    {
        $Visitor->update($request->validated());
        return response()->json($Visitor->id);
    }

    public function destroy(Visitor $Visitor)
    {
        $Visitor->delete();
        return response()->json($Visitor->id);
    }
}
