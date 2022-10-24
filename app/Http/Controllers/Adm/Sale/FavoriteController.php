<?php

namespace App\Http\Controllers\Adm\Sale;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sale\FavoriteRequest;
use App\Models\Sale\Favorite;

class FavoriteController extends Controller
{
    public function index()
    {
        return response()->json(Favorite::all());
    }

    public function store(FavoriteRequest $request)
    {
        $result = Favorite::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Favorite $Favorite)
    {
        return response()->json($Favorite);
    }

    public function update(FavoriteRequest $request, Favorite $Favorite)
    {
        $Favorite->update($request->validated());
        return response()->json($Favorite->id);
    }

    public function destroy(Favorite $Favorite)
    {
        $Favorite->delete();
        return response()->json($Favorite->id);
    }
}
