<?php

namespace App\Http\Controllers\Adm\Career;

use App\Http\Controllers\Controller;
use App\Http\Requests\Career\ApplicationRequest;
use App\Models\Career\Application;

class ApplicationController extends Controller
{
    public function index()
    {
        return response()->json(Application::all());
    }

    public function store(ApplicationRequest $request)
    {
        $result = Application::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Application $Application)
    {
        return response()->json($Application);
    }

    public function update(ApplicationRequest $request, Application $Application)
    {
        $Application->update($request->validated());
        return response()->json($Application->id);
    }

    public function destroy(Application $Application)
    {
        $Application->delete();
        return response()->json($Application->id);
    }
}
