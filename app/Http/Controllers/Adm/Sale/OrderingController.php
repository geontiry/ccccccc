<?php

namespace App\Http\Controllers\Adm\Sale;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sale\OrderingRequest;
use App\Models\Sale\Ordering;

class OrderingController extends Controller
{
    public function index()
    {
        return response()->json(Ordering::all());
    }

    public function store(OrderingRequest $request)
    {
        $result = Ordering::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Ordering $Ordering)
    {
        return response()->json($Ordering);
    }

    public function update(OrderingRequest $request, Ordering $Ordering)
    {
        $Ordering->update($request->validated());
        return response()->json($Ordering->id);
    }

    public function destroy(Ordering $Ordering)
    {
        $Ordering->delete();
        return response()->json($Ordering->id);
    }
}
