<?php

namespace App\Http\Controllers\Adm\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\LoginRequest;
use App\Models\User\Login;

class LoginController extends Controller
{
    public function index()
    {
        return response()->json(Login::all());
    }

    public function store(LoginRequest $request)
    {
        $result = Login::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Login $Login)
    {
        return response()->json($Login);
    }

    public function update(LoginRequest $request, Login $Login)
    {
        $Login->update($request->validated());
        return response()->json($Login->id);
    }

    public function destroy(Login $Login)
    {
        $Login->delete();
        return response()->json($Login->id);
    }
}
