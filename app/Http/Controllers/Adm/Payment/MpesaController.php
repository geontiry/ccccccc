<?php

namespace App\Http\Controllers\Adm\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\MpesaRequest;
use App\Models\Payment\Mpesa;

class MpesaController extends Controller
{
    public function index()
    {
        return response()->json(Mpesa::all());
    }

    public function store(MpesaRequest $request)
    {
        $result = Mpesa::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Mpesa $Mpesa)
    {
        return response()->json($Mpesa);
    }

    public function update(MpesaRequest $request, Mpesa $Mpesa)
    {
        $Mpesa->update($request->validated());
        return response()->json($Mpesa->id);
    }

    public function destroy(Mpesa $Mpesa)
    {
        $Mpesa->delete();
        return response()->json($Mpesa->id);
    }
}
