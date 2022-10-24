<?php

namespace App\Http\Controllers\Adm\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ClientRequest;
use App\Models\User\Client;

class ClientController extends Controller
{
    public function index()
    {
        return response()->json(Client::all());
    }

    public function store(ClientRequest $request)
    {
        $result = Client::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Client $Client)
    {
        return response()->json($Client);
    }

    public function update(ClientRequest $request, Client $Client)
    {
        $Client->update($request->validated());
        return response()->json($Client->id);
    }

    public function destroy(Client $Client)
    {
        $Client->delete();
        return response()->json($Client->id);
    }
}
