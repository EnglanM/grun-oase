<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;



class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $contact = Contact::create($request->all());

        return $contact->save();
    }

    public function show($id)
    {
        $contact = Contact::find($id);

        if (!$contact) {
            return response()->json(['message' => 'Contact not found'], 404);
        }

        return response()->json($contact);
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);

        if (!$contact) {
            return response()->json(['message' => 'Contact not found'], 404);
        }

        $contact->fill($request->all());
        $contact->save();

        return response()->json($contact);
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);

        if (!$contact) {
            return response()->json(['message' => 'Contact not found'], 404);
        }

        $contact->delete();

        return response()->json(['message' => 'Contact deleted']);
    }

    public function index()
    {
        $contacts = Contact::all();

        return response()->json($contacts);
    }


}
