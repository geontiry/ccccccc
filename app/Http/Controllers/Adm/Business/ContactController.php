<?php

namespace App\Http\Controllers\Adm\Business;

use App\Http\Controllers\Controller;
use App\Http\Requests\Business\ContactRequest;
use App\Models\Business\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return response()->json(Contact::all());
    }

    public function store(ContactRequest $request)
    {
        $result = Contact::create($request->validated());
        return response()->json($result->id);
    }

    public function show(Contact $contact)
    {
        return response()->json($contact);
    }

    public function update(ContactRequest $request, Contact $contact)
    {
        $contact->update($request->validated());
        return response()->json($contact->id);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return response()->json($contact->id);
    }
}
