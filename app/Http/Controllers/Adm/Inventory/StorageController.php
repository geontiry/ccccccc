<?php

namespace App\Http\Controllers\Adm\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\StorageRequest;
use App\Models\Inventory\Storage;

class StorageController extends Controller
{
    public function index()
    {
        return response()->json(Storage::all());
    }

    public function store(StorageRequest $request)
    {
        $result = Storage::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Storage $Storage)
    {
        return response()->json($Storage);
    }

    public function update(StorageRequest $request, Storage $Storage)
    {
        $Storage->update($request->validated());
        return response()->json($Storage->id);
    }

    public function destroy(Storage $Storage)
    {
        $Storage->delete();
        return response()->json($Storage->id);
    }
}
