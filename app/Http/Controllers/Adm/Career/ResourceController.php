<?php

namespace App\Http\Controllers\Adm\Career;

use App\Http\Controllers\Controller;
use App\Http\Requests\Career\ResourceRequest;
use App\Models\Career\Resource;

class ResourceController extends Controller
{
    public function index()
    {
        return response()->json(Resource::all());
    }

    public function store(ResourceRequest $request)
    {
        $result = Resource::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Resource $Resource)
    {
        return response()->json($Resource);
    }

    public function update(ResourceRequest $request, Resource $Resource)
    {
        $Resource->update($request->validated());
        return response()->json($Resource->id);
    }

    public function destroy(Resource $Resource)
    {
        $Resource->delete();
        return response()->json($Resource->id);
    }
}
