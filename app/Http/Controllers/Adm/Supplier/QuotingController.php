<?php

namespace App\Http\Controllers\Adm\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supplier\QuotingRequest;
use App\Models\Supplier\Quoting;

class QuotingController extends Controller
{
    public function index()
    {
        return response()->json(Quoting::all());
    }

    public function store(QuotingRequest $request)
    {
        $result = Quoting::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Quoting $Quoting)
    {
        return response()->json($Quoting);
    }

    public function update(QuotingRequest $request, Quoting $Quoting)
    {
        $Quoting->update($request->validated());
        return response()->json($Quoting->id);
    }

    public function destroy(Quoting $Quoting)
    {
        $Quoting->delete();
        return response()->json($Quoting->id);
    }
}
