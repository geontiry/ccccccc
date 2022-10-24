<?php

namespace App\Http\Controllers\Adm\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\TransactionRequest;
use App\Models\Payment\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        return response()->json(Transaction::all());
    }

    public function store(TransactionRequest $request)
    {
        $result = Transaction::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Transaction $Transaction)
    {
        return response()->json($Transaction);
    }

    public function update(TransactionRequest $request, Transaction $Transaction)
    {
        $Transaction->update($request->validated());
        return response()->json($Transaction->id);
    }

    public function destroy(Transaction $Transaction)
    {
        $Transaction->delete();
        return response()->json($Transaction->id);
    }
}
