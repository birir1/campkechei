<?php

// app/Http/Controllers/CampRegistrationController.php

namespace App\Http\Controllers;

use App\Models\CampRegistration;
use Illuminate\Http\Request;

class CampRegistrationController extends Controller
{
    public function register(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'full_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'email' => 'required|email',
            'phone' => 'required|regex:/^[0-9]{10}$/',
            // Add other fields validation
        ]);

        // Create a new registration in the database
        CampRegistration::create([
            'full_name' => $request->input('full_name'),
            'dob' => $request->input('dob'),
            'gender' => $request->input('gender'),
            'nationality' => $request->input('nationality'),
            'passport_number' => $request->input('passport_number'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'emergency_contact' => $request->input('emergency_contact'),
            'skill_level' => $request->input('skill_level'),
            'personal_best' => $request->input('personal_best'),
            'training_goals' => $request->input('training_goals'),
            'medical_history' => $request->input('medical_history'),
            'current_medications' => $request->input('current_medications'),
            'arrival_date' => $request->input('arrival_date'),
            'departure_date' => $request->input('departure_date'),
            'dietary_requirements' => $request->input('dietary_requirements'),
            'payment_method' => $request->input('payment_method'),
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Registration Successful');
    }
}