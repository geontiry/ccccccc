<?php

namespace App\Http\Controllers\Adm\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supplier\QuotationRequest;
use App\Models\Supplier\Quotation;

class QuotationController extends Controller
{
    public function index()
    {
        return response()->json(Quotation::all());
    }

    public function store(QuotationRequest $request)
    {
        $result = Quotation::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Quotation $Quotation)
    {
        return response()->json($Quotation);
    }

    public function update(QuotationRequest $request, Quotation $Quotation)
    {
        $Quotation->update($request->validated());
        return response()->json($Quotation->id);
    }

    public function destroy(Quotation $Quotation)
    {
        $Quotation->delete();
        return response()->json($Quotation->id);
    }
}
