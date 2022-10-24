<?php

namespace App\Http\Controllers\Adm\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\StocklistRequest;
use App\Models\Inventory\Stocklist;

class StocklistController extends Controller
{
    public function index()
    {
        return response()->json(Stocklist::all());
    }

    public function store(StocklistRequest $request)
    {
        $result = Stocklist::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Stocklist $Stocklist)
    {
        return response()->json($Stocklist);
    }

    public function update(StocklistRequest $request, Stocklist $Stocklist)
    {
        $Stocklist->update($request->validated());
        return response()->json($Stocklist->id);
    }

    public function destroy(Stocklist $Stocklist)
    {
        $Stocklist->delete();
        return response()->json($Stocklist->id);
    }
}
