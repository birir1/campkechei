<body style="font-family: Arial, sans-serif; background-color: #f2f2f2; padding: 20px;">

    <h2 style="text-align: center; color: #143009;">Training Camp Registration</h2>
    <form style="background-color: #fff; padding: 20px; border-radius: 8px; max-width: 600px; margin: auto; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        
        <!-- Personal Information -->
        <h3 style="color: #143009;">Personal Information</h3>
        <label>Full Name:</label>
        <input type="text" name="full_name" style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">
        
        <label>Date of Birth:</label>
        <input type="date" name="dob" style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">
        
        <label>Gender:</label>
        <select name="gender" style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        
        <label>Nationality:</label>
        <input type="text" name="nationality" style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">
        
        <label>Passport Number (if international):</label>
        <input type="text" name="passport_number" style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">
        
        <!-- Contact Information -->
        <h3 style="color: #143009;">Contact Information</h3>
        <label>Email Address:</label>
        <input type="email" name="email" style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">
        
        <label>Phone Number:</label>
        <input type="tel" name="phone" style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">
        
        <label>Emergency Contact (Name & Phone):</label>
        <input type="text" name="emergency_contact" style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">
        
        <!-- Athletic Background -->
        <h3 style="color: #143009;">Athletic Background</h3>
        <label>Current Skill Level:</label>
        <select name="skill_level" style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">
            <option value="beginner">Beginner</option>
            <option value="intermediate">Intermediate</option>
            <option value="advanced">Advanced</option>
        </select>
        
        <label>Personal Best Times (e.g., 5K, 10K):</label>
        <input type="text" name="personal_best" style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">
        
        <label>Training Goals:</label>
        <textarea name="training_goals" style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;" rows="3"></textarea>
        
        <!-- Health & Medical Information -->
        <h3 style="color: #143009;">Health & Medical Information</h3>
        <label>Medical History:</label>
        <textarea name="medical_history" style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;" rows="3"></textarea>
        
        <label>Current Medications:</label>
        <textarea name="current_medications" style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;" rows="2"></textarea>
        
        <!-- Travel & Accommodation -->
        <h3 style="color: #143009;">Travel & Accommodation</h3>
        <label>Arrival Date:</label>
        <input type="date" name="arrival_date" style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">
        
        <label>Departure Date:</label>
        <input type="date" name="departure_date" style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">
        
        <label>Dietary Requirements:</label>
        <textarea name="dietary_requirements" style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;" rows="2"></textarea>
        
        <!-- Payment Information -->
        <h3 style="color: #143009;">Payment Information</h3>
        <label>Payment Method:</label>
        <select name="payment_method" style="width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;">
            <option value="credit_card">Credit Card</option>
            <option value="bank_transfer">Bank Transfer</option>
            <option value="paypal">PayPal</option>
        </select>
        
        <!-- Consent & Waivers -->
        <h3 style="color: #143009;">Consent & Waivers</h3>
        <label>
            <input type="checkbox" name="medical_consent" style="margin-right: 8px;"> I consent to emergency medical treatment if necessary.
        </label><br>
        
        <label>
            <input type="checkbox" name="liability_waiver" style="margin-right: 8px;"> I accept the liability waiver for participation.
        </label><br>
        
        <label>
            <input type="checkbox" name="photo_release" style="margin-right: 8px;"> I agree to photo/video release for promotional purposes.
        </label><br>

        <!-- Submit Button -->
        <button type="submit" style="background-color: #143009; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; margin-top: 20px;">
            Register
        </button>
    </form>

</body>