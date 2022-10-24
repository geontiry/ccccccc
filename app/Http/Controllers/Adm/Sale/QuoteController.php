<?php

namespace App\Http\Controllers\Adm\Sale;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sale\QuoteRequest;
use App\Models\Sale\Quote;

class QuoteController extends Controller
{
    public function index()
    {
        return response()->json(Quote::all());
    }

    public function store(QuoteRequest $request)
    {
        $result = Quote::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Quote $Quote)
    {
        return response()->json($Quote);
    }

    public function update(QuoteRequest $request, Quote $Quote)
    {
        $Quote->update($request->validated());
        return response()->json($Quote->id);
    }

    public function destroy(Quote $Quote)
    {
        $Quote->delete();
        return response()->json($Quote->id);
    }
}
