<?php

namespace App\Http\Controllers\Adm\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\FirmRequest;
use App\Models\User\Firm;

class FirmController extends Controller
{
    public function index()
    {
        return response()->json(Firm::all());
    }

    public function store(FirmRequest $request)
    {
        $result = Firm::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Firm $Firm)
    {
        return response()->json($Firm);
    }

    public function update(FirmRequest $request, Firm $Firm)
    {
        $Firm->update($request->validated());
        return response()->json($Firm->id);
    }

    public function destroy(Firm $Firm)
    {
        $Firm->delete();
        return response()->json($Firm->id);
    }
}
