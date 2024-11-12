<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingCampRegistration;

class TrainingCampRegistrationController extends Controller
{
    // Method to show the registration form
    public function showForm()
    {
        // Correct the view path to match the file location
        return view('frontend.partials.registerform');  // Correct path to your view file
    }

    // Method to handle form submission and store the registration data
    public function store(Request $request)
    {
        // Validate the form input
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'nationality' => 'required|string|max:255',
            'passport_number' => 'nullable|string|max:255',
            'email' => 'required|email|unique:training_camp_registrations',
            'phone' => 'required|string|max:255',
            'emergency_contact' => 'required|string|max:255',
            'skill_level' => 'required|in:beginner,intermediate,advanced',
            'personal_best' => 'nullable|string|max:255',
            'training_goals' => 'nullable|string',
            'medical_history' => 'nullable|string',
            'current_medications' => 'nullable|string',
            'arrival_date' => 'required|date',
            'departure_date' => 'required|date|after_or_equal:arrival_date',
            'dietary_requirements' => 'nullable|string',
            'payment_method' => 'required|in:credit_card,bank_transfer,paypal',
            'medical_consent' => 'required|boolean',
            'liability_waiver' => 'required|boolean',
            'photo_release' => 'required|boolean',
        ]);

        // Save the data to the database
        TrainingCampRegistration::create($validated);

        // Redirect with success message
        return redirect('/register')->with('success', 'Registration successful!');
    }
}