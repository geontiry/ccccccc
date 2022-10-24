<?php

namespace App\Http\Controllers\Adm\Sale;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sale\CashingRequest;
use App\Models\Sale\Cashing;

class CashingController extends Controller
{
    public function index()
    {
        return response()->json(Cashing::all());
    }

    public function store(CashingRequest $request)
    {
        $result = Cashing::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Cashing $Cashing)
    {
        return response()->json($Cashing);
    }

    public function update(CashingRequest $request, Cashing $Cashing)
    {
        $Cashing->update($request->validated());
        return response()->json($Cashing->id);
    }

    public function destroy(Cashing $Cashing)
    {
        $Cashing->delete();
        return response()->json($Cashing->id);
    }
}
