<?php

namespace App\Http\Controllers\Adm\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\PasswordRequest;
use App\Models\User\Password;

class PasswordController extends Controller
{
    public function index()
    {
        return response()->json(Password::all());
    }

    public function store(PasswordRequest $request)
    {
        $result = Password::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Password $Password)
    {
        return response()->json($Password);
    }

    public function update(PasswordRequest $request, Password $Password)
    {
        $Password->update($request->validated());
        return response()->json($Password->id);
    }

    public function destroy(Password $Password)
    {
        $Password->delete();
        return response()->json($Password->id);
    }
}
