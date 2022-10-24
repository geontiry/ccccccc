<?php

namespace App\Http\Controllers\Adm\Catalogue;

use App\Http\Controllers\Controller;
use App\Http\Requests\Catalogue\PackageRequest;
use App\Models\Catalogue\Package;

class PackageController extends Controller
{
    public function index()
    {
        return response()->json(Package::all());
    }

    public function store(PackageRequest $request)
    {
        $result = Package::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Package $Package)
    {
        return response()->json($Package);
    }

    public function update(PackageRequest $request, Package $Package)
    {
        $Package->update($request->validated());
        return response()->json($Package->id);
    }

    public function destroy(Package $Package)
    {
        $Package->delete();
        return response()->json($Package->id);
    }
}
