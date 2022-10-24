<?php

namespace App\Http\Controllers\Adm\Career;

use App\Http\Controllers\Controller;
use App\Http\Requests\Career\InterviewRequest;
use App\Models\Career\Interview;

class InterviewController extends Controller
{
    public function index()
    {
        return response()->json(Interview::all());
    }

    public function store(InterviewRequest $request)
    {
        $result = Interview::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Interview $Interview)
    {
        return response()->json($Interview);
    }

    public function update(InterviewRequest $request, Interview $Interview)
    {
        $Interview->update($request->validated());
        return response()->json($Interview->id);
    }

    public function destroy(Interview $Interview)
    {
        $Interview->delete();
        return response()->json($Interview->id);
    }
}
