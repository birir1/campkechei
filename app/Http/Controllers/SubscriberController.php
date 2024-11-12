<?php

// app/Http/Controllers/SubscriberController.php

// app/Http/Controllers/SubscriberController.php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    // Method to handle the subscription
    public function store(Request $request)
    {
        // Validate the email input
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        // Create a new subscriber
        Subscriber::create([
            'email' => $request->email,
        ]);

        // Redirect or return a success message
        return redirect()->back()->with('success', 'Subscription successful');
    }
}