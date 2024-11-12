<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    // Show the registration form
    public function showForm()
    {
        return view('registration.form');
    }

    // Handle form submission
    public function submitForm(Request $request)
    {
        // Validate form data
        $request->validate([
            'full_name' => 'required|string|max:255',
            'gender' => 'required|string',
            'medical_history' => 'nullable|string',
            'dietary_requirements' => 'nullable|string',
            'medical_consent' => 'required|boolean',
            'payment_method' => 'required|string',
        ]);

        // Store data into the database
        Registration::create([
            'full_name' => $request->full_name,
            'gender' => $request->gender,
            'medical_history' => $request->medical_history,
            'dietary_requirements' => $request->dietary_requirements,
            'medical_consent' => $request->medical_consent,
            'payment_method' => $request->payment_method,
        ]);

        // Redirect or return success message
        return redirect()->route('registration.success');
    }

    // Show success page
    public function success()
    {
        return view('registration.success');
    }
}