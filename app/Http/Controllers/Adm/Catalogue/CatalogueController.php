<?php

namespace App\Http\Controllers\Adm\Catalogue;

use App\Http\Controllers\Controller;
use App\Models\Catalogue\Catalogue;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function index()
    {
        $read = Catalogue::select('id', 'name', 'slug')->get();
        return response()->json($read);
    }

    public function store(Request $request)
    {
        $created = Catalogue::create($request->all());
        return response()->json($created->id);
    }

    public function show(Catalogue $catalogue)
    {
        return response()->json($catalogue);
    }

    public function update(Request $request, Catalogue $catalogue)
    {
        $catalogue->update($request->only(['name', 'slug']));
        return response()->json($catalogue->id);
    }

    public function destroy(Catalogue $catalogue)
    {
        $catalogue->delete();
        return response()->json($catalogue->id);
    }
}
