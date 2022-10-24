<?php

namespace App\Http\Controllers\Adm\Location;

use App\Http\Controllers\Controller;
use App\Http\Requests\Location\SubcountyRequest;
use App\Models\Location\Subcounty;

class SubcountyController extends Controller
{
    public function index()
    {
        return response()->json(Subcounty::all());
    }

    public function store(SubcountyRequest $request)
    {
        $result = Subcounty::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Subcounty $subcounty)
    {
        return response()->json($subcounty);
    }


    public function update(SubcountyRequest $request, Subcounty $subcounty)
    {
        $subcounty->update($request->validated());
        return response()->json($subcounty->id);
    }

    public function destroy(Subcounty $subcounty)
    {
        $subcounty->delete();
        return response()->json($subcounty->id);
    }
}
