<?php

namespace App\Http\Controllers\Adm\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\GuestRequest;
use App\Models\User\Guest;

class GuestController extends Controller
{
    public function index()
    {
        return response()->json(Guest::all());
    }

    public function store(GuestRequest $request)
    {
        $result = Guest::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Guest $Guest)
    {
        return response()->json($Guest);
    }

    public function update(GuestRequest $request, Guest $Guest)
    {
        $Guest->update($request->validated());
        return response()->json($Guest->id);
    }

    public function destroy(Guest $Guest)
    {
        $Guest->delete();
        return response()->json($Guest->id);
    }
}
