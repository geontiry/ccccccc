<?php

namespace App\Http\Controllers\Adm\Business;

use App\Http\Controllers\Controller;
use App\Http\Requests\Business\BusinessRequest;
use App\Models\Business\Business;

class BusinessController extends Controller
{
    public function index()
    {
        return response()->json(Business::all());
    }

    public function store(BusinessRequest $request)
    {
        $result = Business::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Business $business)
    {
        return response()->json($business);
    }

    public function update(BusinessRequest $request, Business $business)
    {
        $business->update($request->validated());
        return response()->json($business->id);
    }

    public function destroy(Business $business)
    {
        $business->delete();
        return response()->json($business->id);
    }
}
