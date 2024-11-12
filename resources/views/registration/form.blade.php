<!-- resources/views/registration/form.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        /* Add custom styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
        }
        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #143009;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2d4e2d;
        }
    </style>
</head>
<body>

    <form action="{{ route('registration.submit') }}" method="POST">
        @csrf
        <h2>Registration Form</h2>

        <label for="full_name">Full Name</label>
        <input type="text" name="full_name" id="full_name" required>

        <label for="gender">Gender</label>
        <select name="gender" id="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label for="medical_history">Medical History</label>
        <textarea name="medical_history" id="medical_history" rows="4"></textarea>

        <label for="dietary_requirements">Dietary Requirements</label>
        <textarea name="dietary_requirements" id="dietary_requirements" rows="4"></textarea>

        <label for="medical_consent">Medical Consent</label>
        <input type="checkbox" name="medical_consent" id="medical_consent">

        <label for="payment_method">Payment Method</label>
        <select name="payment_method" id="payment_method" required>
            <option value="Cash">Cash</option>
            <option value="Credit Card">Credit Card</option>
            <option value="PayPal">PayPal</option>
        </select>

        <div style="text-align: center;">
            <button type="submit">Submit Registration</button>
        </div>
    </form>

</body>
</html>
