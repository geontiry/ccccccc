<?php

namespace App\Http\Controllers\Adm\Business;

use App\Http\Controllers\Controller;
use App\Http\Requests\Business\PageRequest;
use App\Models\Business\Page;

class PageController extends Controller
{
    public function index()
    {
        return response()->json(Page::all());
    }

    public function store(PageRequest $request)
    {
        $result = Page::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Page $Page)
    {
        return response()->json($Page);
    }

    public function update(PageRequest $request, Page $Page)
    {
        $Page->update($request->validated());
        return response()->json($Page->id);
    }

    public function destroy(Page $Page)
    {
        $Page->delete();
        return response()->json($Page->id);
    }
}
