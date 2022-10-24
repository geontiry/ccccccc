<?php

namespace App\Http\Controllers\Adm\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::all());
    }

    public function store(UserRequest $request)
    {
        $result = User::create($request->validated());
        return response()->json($result->id);
    }

    public function show(User $User)
    {
        return response()->json($User);
    }

    public function update(UserRequest $request, User $User)
    {
        $User->update($request->validated());
        return response()->json($User->id);
    }

    public function destroy(User $User)
    {
        $User->delete();
        return response()->json($User->id);
    }
}
