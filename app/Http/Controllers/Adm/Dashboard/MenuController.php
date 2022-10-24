<?php

namespace App\Http\Controllers\Adm\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\MenuRequest;
use App\Models\Dashboard\Menu;

class MenuController extends Controller
{
    public function index()
    {
        return response()->json(Menu::all());
    }

    public function store(MenuRequest $request)
    {
        $result = Menu::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Menu $Menu)
    {
        return response()->json($Menu);
    }

    public function update(MenuRequest $request, Menu $Menu)
    {
        $Menu->update($request->validated());
        return response()->json($Menu->id);
    }

    public function destroy(Menu $Menu)
    {
        $Menu->delete();
        return response()->json($Menu->id);
    }
}
