<?php

namespace App\Http\Controllers\Adm\Sale;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sale\CashlistRequest;
use App\Models\Sale\Cashlist;

class CashlistController extends Controller
{
    public function index()
    {
        return response()->json(Cashlist::all());
    }

    public function store(CashlistRequest $request)
    {
        $result = Cashlist::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Cashlist $Cashlist)
    {
        return response()->json($Cashlist);
    }

    public function update(CashlistRequest $request, Cashlist $Cashlist)
    {
        $Cashlist->update($request->validated());
        return response()->json($Cashlist->id);
    }

    public function destroy(Cashlist $Cashlist)
    {
        $Cashlist->delete();
        return response()->json($Cashlist->id);
    }
}
