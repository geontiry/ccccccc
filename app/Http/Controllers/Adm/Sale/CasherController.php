<?php

namespace App\Http\Controllers\Adm\Sale;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sale\CasherRequest;
use App\Models\Sale\Casher;

class CasherController extends Controller
{
    public function index()
    {
        return response()->json(Casher::all());
    }

    public function store(CasherRequest $request)
    {
        $result = Casher::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Casher $Casher)
    {
        return response()->json($Casher);
    }

    public function update(CasherRequest $request, Casher $Casher)
    {
        $Casher->update($request->validated());
        return response()->json($Casher->id);
    }

    public function destroy(Casher $Casher)
    {
        $Casher->delete();
        return response()->json($Casher->id);
    }
}
