<?php

namespace App\Http\Controllers\Adm\Sale;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sale\OrderlistRequest;
use App\Models\Sale\Orderlist;

class OrderlistController extends Controller
{
    public function index()
    {
        return response()->json(Orderlist::all());
    }

    public function store(OrderlistRequest $request)
    {
        $result = Orderlist::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Orderlist $Orderlist)
    {
        return response()->json($Orderlist);
    }

    public function update(OrderlistRequest $request, Orderlist $Orderlist)
    {
        $Orderlist->update($request->validated());
        return response()->json($Orderlist->id);
    }

    public function destroy(Orderlist $Orderlist)
    {
        $Orderlist->delete();
        return response()->json($Orderlist->id);
    }
}
