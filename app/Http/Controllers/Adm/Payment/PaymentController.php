<?php

namespace App\Http\Controllers\Adm\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\PaymentRequest;
use App\Models\Payment\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        return response()->json(Payment::all());
    }

    public function store(PaymentRequest $request)
    {
        $result = Payment::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Payment $Payment)
    {
        return response()->json($Payment);
    }

    public function update(PaymentRequest $request, Payment $Payment)
    {
        $Payment->update($request->validated());
        return response()->json($Payment->id);
    }

    public function destroy(Payment $Payment)
    {
        $Payment->delete();
        return response()->json($Payment->id);
    }
}
