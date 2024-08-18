<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Kirim email
        Mail::to('bayuardana213@gmail.com')->send(new ContactMail($validated));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
