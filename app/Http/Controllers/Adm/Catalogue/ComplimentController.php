<?php

namespace App\Http\Controllers\Adm\Catalogue;

use App\Http\Controllers\Controller;
use App\Http\Requests\Catalogue\ComplimentRequest;
use App\Models\Catalogue\Compliment;

class ComplimentController extends Controller
{
    public function index()
    {
        return response()->json(Compliment::all());
    }

    public function store(ComplimentRequest $request)
    {
        $result = Compliment::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Compliment $Compliment)
    {
        return response()->json($Compliment);
    }

    public function update(ComplimentRequest $request, Compliment $Compliment)
    {
        $Compliment->update($request->validated());
        return response()->json($Compliment->id);
    }

    public function destroy(Compliment $Compliment)
    {
        $Compliment->delete();
        return response()->json($Compliment->id);
    }
}
