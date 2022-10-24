<?php

namespace App\Http\Controllers\Adm\Sale;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sale\QuotelistRequest;
use App\Models\Sale\Quotelist;

class QuotelistController extends Controller
{
    public function index()
    {
        return response()->json(Quotelist::all());
    }

    public function store(QuotelistRequest $request)
    {
        $result = Quotelist::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Quotelist $Quotelist)
    {
        return response()->json($Quotelist);
    }

    public function update(QuotelistRequest $request, Quotelist $Quotelist)
    {
        $Quotelist->update($request->validated());
        return response()->json($Quotelist->id);
    }

    public function destroy(Quotelist $Quotelist)
    {
        $Quotelist->delete();
        return response()->json($Quotelist->id);
    }
}
