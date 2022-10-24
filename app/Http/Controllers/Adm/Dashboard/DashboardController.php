<?php

namespace App\Http\Controllers\Adm\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\DashboardRequest;
use App\Models\Dashboard\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        return response()->json(Dashboard::all());
    }

    public function store(DashboardRequest $request)
    {
        $result = Dashboard::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Dashboard $Dashboard)
    {
        return response()->json($Dashboard);
    }

    public function update(DashboardRequest $request, Dashboard $Dashboard)
    {
        $Dashboard->update($request->validated());
        return response()->json($Dashboard->id);
    }

    public function destroy(Dashboard $Dashboard)
    {
        $Dashboard->delete();
        return response()->json($Dashboard->id);
    }
}
