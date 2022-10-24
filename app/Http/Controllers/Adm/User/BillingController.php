<?php

namespace App\Http\Controllers\Adm\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\BillingRequest;
use App\Models\User\Billing;

class BillingController extends Controller
{
    public function index()
    {
        return response()->json(Billing::all());
    }

    public function store(BillingRequest $request)
    {
        $result = Billing::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Billing $Billing)
    {
        return response()->json($Billing);
    }

    public function update(BillingRequest $request, Billing $Billing)
    {
        $Billing->update($request->validated());
        return response()->json($Billing->id);
    }

    public function destroy(Billing $Billing)
    {
        $Billing->delete();
        return response()->json($Billing->id);
    }
}
