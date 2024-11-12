<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Send the email with the validated data
        Mail::to('support@kechei.com')->send(new ContactMessage($validated));

        // Redirect back with a success message
        return back()->with('success', 'Your message has been sent successfully.');
    }
}