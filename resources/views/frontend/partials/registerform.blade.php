<h2 style="text-align: center; color: #143009;">Training Camp Registration</h2>
<form method="POST" action="{{ route('camp.register') }}" style="background-color: #fff; padding: 20px; border-radius: 8px; max-width: 800px; margin: auto; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    @csrf <!-- CSRF Protection -->

    <!-- Personal Information -->
    <fieldset style="border: none; margin-bottom: 20px;">
        <legend style="color: #143009; font-size: 1.25em; font-weight: bold;">Personal Information</legend>

        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="full_name" required style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <label for="nationality">Nationality:</label>
        <input type="text" id="nationality" name="nationality" required style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">

        <label for="passport_number">Passport Number (if international):</label>
        <input type="text" id="passport_number" name="passport_number" style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">
    </fieldset>

    <!-- Contact Information -->
    <fieldset style="border: none; margin-bottom: 20px;">
        <legend style="color: #143009; font-size: 1.25em; font-weight: bold;">Contact Information</legend>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">

        <label for="emergency_contact">Emergency Contact (Name & Phone):</label>
        <input type="text" id="emergency_contact" name="emergency_contact" required style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">
    </fieldset>

    <!-- Athletic Background -->
    <fieldset style="border: none; margin-bottom: 20px;">
        <legend style="color: #143009; font-size: 1.25em; font-weight: bold;">Athletic Background</legend>

        <label for="skill_level">Current Skill Level:</label>
        <select id="skill_level" name="skill_level" required style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">
            <option value="beginner">Beginner</option>
            <option value="intermediate">Intermediate</option>
            <option value="advanced">Advanced</option>
        </select>

        <label for="personal_best">Personal Best Times (e.g., 5K, 10K):</label>
        <input type="text" id="personal_best" name="personal_best" style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">

        <label for="training_goals">Training Goals:</label>
        <textarea id="training_goals" name="training_goals" style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;" rows="3"></textarea>
    </fieldset>

    <!-- Health & Medical Information -->
    <fieldset style="border: none; margin-bottom: 20px;">
        <legend style="color: #143009; font-size: 1.25em; font-weight: bold;">Health & Medical Information</legend>

        <label for="medical_history">Medical History:</label>
        <textarea id="medical_history" name="medical_history" style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;" rows="3"></textarea>

        <label for="current_medications">Current Medications:</label>
        <textarea id="current_medications" name="current_medications" style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;" rows="2"></textarea>
    </fieldset>

    <!-- Travel & Accommodation -->
    <fieldset style="border: none; margin-bottom: 20px;">
        <legend style="color: #143009; font-size: 1.25em; font-weight: bold;">Travel & Accommodation</legend>

        <label for="arrival_date">Arrival Date:</label>
        <input type="date" id="arrival_date" name="arrival_date" required style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">

        <label for="departure_date">Departure Date:</label>
        <input type="date" id="departure_date" name="departure_date" required style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">

        <label for="dietary_requirements">Dietary Requirements:</label>
        <textarea id="dietary_requirements" name="dietary_requirements" style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;" rows="2"></textarea>
    </fieldset>

    <!-- Payment Information -->
    <fieldset style="border: none; margin-bottom: 20px;">
        <legend style="color: #143009; font-size: 1.25em; font-weight: bold;">Payment Information</legend>

        <label for="payment_method">Payment Method:</label>
        <select id="payment_method" name="payment_method" required style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">
            <option value="credit_card">Credit Card</option>
            <option value="bank_transfer">Bank Transfer</option>
            <option value="paypal">PayPal</option>
        </select>
    </fieldset>

    <!-- Consent & Waivers -->
    <fieldset style="border: none; margin-bottom: 20px;">
        <legend style="color: #143009; font-size: 1.25em; font-weight: bold;">Consent & Waivers</legend>

        <label>
            <input type="checkbox" name="medical_consent" required style="margin-right: 8px;"> I consent to emergency medical treatment if necessary.
        </label><br>

        <label>
            <input type="checkbox" name="liability_waiver" required style="margin-right: 8px;"> I agree to the terms and conditions of the training camp.
        </label>
    </fieldset>

    <!-- Submit Button -->
    <div style="text-align: center;">
        <button type="submit" style="background-color: #143009; color: white; padding: 10px 20px; border: none; border-radius: 4px; font-size: 16px;">Submit Registration</button>
    </div>
    <!-- Display success message -->
@if(session('success'))
<div style="background-color: #4CAF50; color: white; padding: 15px; border-radius: 5px;">
    {{ session('success') }}
</div>
@endif

</form>
