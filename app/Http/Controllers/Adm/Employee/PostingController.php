<?php

namespace App\Http\Controllers\Adm\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\PostingRequest;
use App\Models\Employee\Posting;

class PostingController extends Controller
{
    public function index()
    {
        return response()->json(Posting::all());
    }

    public function store(PostingRequest $request)
    {
        $result = Posting::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Posting $Posting)
    {
        return response()->json($Posting);
    }

    public function update(PostingRequest $request, Posting $Posting)
    {
        $Posting->update($request->validated());
        return response()->json($Posting->id);
    }

    public function destroy(Posting $Posting)
    {
        $Posting->delete();
        return response()->json($Posting->id);
    }
}
