<?php

namespace App\Http\Controllers\Adm\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\CardRequest;
use App\Models\Payment\Card;

class CardController extends Controller
{
    public function index()
    {
        return response()->json(Card::all());
    }

    public function store(CardRequest $request)
    {
        $result = Card::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Card $Card)
    {
        return response()->json($Card);
    }

    public function update(CardRequest $request, Card $Card)
    {
        $Card->update($request->validated());
        return response()->json($Card->id);
    }

    public function destroy(Card $Card)
    {
        $Card->delete();
        return response()->json($Card->id);
    }
}
