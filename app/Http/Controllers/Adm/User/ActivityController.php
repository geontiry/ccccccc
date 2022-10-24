<?php

namespace App\Http\Controllers\Adm\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ActivityRequest;
use App\Models\User\Activity;

class ActivityController extends Controller
{
    public function index()
    {
        return response()->json(Activity::all());
    }

    public function store(ActivityRequest $request)
    {
        $result = Activity::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Activity $Activity)
    {
        return response()->json($Activity);
    }

    public function update(ActivityRequest $request, Activity $Activity)
    {
        $Activity->update($request->validated());
        return response()->json($Activity->id);
    }

    public function destroy(Activity $Activity)
    {
        $Activity->delete();
        return response()->json($Activity->id);
    }
}
