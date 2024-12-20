<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactSubmission;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:15',
            'msg_subject' => 'required|string|max:255',
            'message' => 'required|string',
            'gridCheck' => 'required|accepted',
        ]);

        // Save the data to the database
        ContactSubmission::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone_number'],
            'msg_subject' => $validated['msg_subject'],
            'message' => $validated['message'],
            'agreed_to_terms' => true,
        ]);

        // Return a success response
        return response()->json(['message' => 'Form submitted successfully'], 200);
    }
}
