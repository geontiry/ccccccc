<?php

namespace App\Http\Controllers\Adm\Catalogue;

use App\Http\Controllers\Controller;
use App\Http\Requests\Catalogue\SpecRequest;
use App\Models\Catalogue\Spec;

class SpecController extends Controller
{
    public function index()
    {
        return response()->json(Spec::all());
    }

    public function store(SpecRequest $request)
    {
        $result = Spec::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Spec $Spec)
    {
        return response()->json($Spec);
    }

    public function update(SpecRequest $request, Spec $Spec)
    {
        $Spec->update($request->validated());
        return response()->json($Spec->id);
    }

    public function destroy(Spec $Spec)
    {
        $Spec->delete();
        return response()->json($Spec->id);
    }
}
