<?php

namespace App\Http\Controllers\Adm\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\CashRequest;
use App\Models\Payment\Cash;

class CashController extends Controller
{
    public function index()
    {
        return response()->json(Cash::all());
    }

    public function store(CashRequest $request)
    {
        $result = Cash::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Cash $Cash)
    {
        return response()->json($Cash);
    }

    public function update(CashRequest $request, Cash $Cash)
    {
        $Cash->update($request->validated());
        return response()->json($Cash->id);
    }

    public function destroy(Cash $Cash)
    {
        $Cash->delete();
        return response()->json($Cash->id);
    }
}
