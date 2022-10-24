<?php

namespace App\Http\Controllers\Adm\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\MpesageRequest;
use App\Models\Payment\Mpesage;

class MpesageController extends Controller
{
    public function index()
    {
        return response()->json(Mpesage::all());
    }

    public function store(MpesageRequest $request)
    {
        $result = Mpesage::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Mpesage $Mpesage)
    {
        return response()->json($Mpesage);
    }

    public function update(MpesageRequest $request, Mpesage $Mpesage)
    {
        $Mpesage->update($request->validated());
        return response()->json($Mpesage->id);
    }

    public function destroy(Mpesage $Mpesage)
    {
        $Mpesage->delete();
        return response()->json($Mpesage->id);
    }
}
