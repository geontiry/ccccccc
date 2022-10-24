<?php

namespace App\Http\Controllers\Adm\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\EmpBankingRequest;
use App\Models\Employee\EmpBanking;

class EmpBankingController extends Controller
{
    public function index()
    {
        return response()->json(EmpBanking::all());
    }

    public function store(EmpBankingRequest $request)
    {
        $result = EmpBanking::create($request->validated());
        return response()->json($result->id);
    }

    public function show(EmpBanking $EmpBanking)
    {
        return response()->json($EmpBanking);
    }

    public function update(EmpBankingRequest $request, EmpBanking $EmpBanking)
    {
        $EmpBanking->update($request->validated());
        return response()->json($EmpBanking->id);
    }

    public function destroy(EmpBanking $EmpBanking)
    {
        $EmpBanking->delete();
        return response()->json($EmpBanking->id);
    }
}
