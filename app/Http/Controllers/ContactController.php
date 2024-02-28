<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact.contact');
    }

    public function store(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Save form data to the database
        ContactMessage::create($validatedData);

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }
}
