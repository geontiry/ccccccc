<?php

namespace App\Http\Controllers\Adm\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\MethodRequest;
use App\Models\Payment\Method;

class MethodController extends Controller
{
    public function index()
    {
        return response()->json(Method::all());
    }

    public function store(MethodRequest $request)
    {
        $result = Method::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Method $Method)
    {
        return response()->json($Method);
    }

    public function update(MethodRequest $request, Method $Method)
    {
        $Method->update($request->validated());
        return response()->json($Method->id);
    }

    public function destroy(Method $Method)
    {
        $Method->delete();
        return response()->json($Method->id);
    }
}
