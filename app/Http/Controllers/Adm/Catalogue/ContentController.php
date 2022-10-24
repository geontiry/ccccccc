<?php

namespace App\Http\Controllers\Adm\Catalogue;

use App\Http\Controllers\Controller;
use App\Http\Requests\Catalogue\ContentRequest;
use App\Models\Catalogue\Content;

class ContentController extends Controller
{
    public function index()
    {
        return response()->json(Content::all());
    }

    public function store(ContentRequest $request)
    {
        $result = Content::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Content $Content)
    {
        return response()->json($Content);
    }

    public function update(ContentRequest $request, Content $Content)
    {
        $Content->update($request->validated());
        return response()->json($Content->id);
    }

    public function destroy(Content $Content)
    {
        $Content->delete();
        return response()->json($Content->id);
    }
}
