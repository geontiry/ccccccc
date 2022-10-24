<?php

namespace App\Http\Controllers\Adm\Sale;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sale\RefundRequest;
use App\Models\Sale\Refund;

class RefundController extends Controller
{
    public function index()
    {
        return response()->json(Refund::all());
    }

    public function store(RefundRequest $request)
    {
        $result = Refund::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Refund $Refund)
    {
        return response()->json($Refund);
    }

    public function update(RefundRequest $request, Refund $Refund)
    {
        $Refund->update($request->validated());
        return response()->json($Refund->id);
    }

    public function destroy(Refund $Refund)
    {
        $Refund->delete();
        return response()->json($Refund->id);
    }
}
