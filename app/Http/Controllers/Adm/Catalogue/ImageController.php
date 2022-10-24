<?php

namespace App\Http\Controllers\Adm\Catalogue;

use App\Http\Controllers\Controller;
use App\Http\Requests\Catalogue\ImageRequest;
use App\Models\Catalogue\Image;

class ImageController extends Controller
{
    public function index()
    {
        return response()->json(Image::all());
    }

    public function store(ImageRequest $request)
    {
        $result = Image::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Image $Image)
    {
        return response()->json($Image);
    }

    public function update(ImageRequest $request, Image $Image)
    {
        $Image->update($request->validated());
        return response()->json($Image->id);
    }

    public function destroy(Image $Image)
    {
        $Image->delete();
        return response()->json($Image->id);
    }
}
