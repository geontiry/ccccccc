<?php

namespace App\Http\Controllers\Adm\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\SubscriberRequest;
use App\Models\User\Subscriber;

class SubscriberController extends Controller
{
    public function index()
    {
        return response()->json(Subscriber::all());
    }

    public function store(SubscriberRequest $request)
    {
        $result = Subscriber::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Subscriber $Subscriber)
    {
        return response()->json($Subscriber);
    }

    public function update(SubscriberRequest $request, Subscriber $Subscriber)
    {
        $Subscriber->update($request->validated());
        return response()->json($Subscriber->id);
    }

    public function destroy(Subscriber $Subscriber)
    {
        $Subscriber->delete();
        return response()->json($Subscriber->id);
    }
}
