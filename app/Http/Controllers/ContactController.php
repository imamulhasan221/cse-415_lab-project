<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // Process the data (store in database, send email, etc.)
        // Example: Send email
        Mail::to('your-email@example.com')->send(new ContactFormSubmitted($validated));

        // Redirect back with success message
        return back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}