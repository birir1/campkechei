<!-- resources/views/subscribe.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe to Invoices</title>
</head>
<body>
    <h1>Subscribe to Our Invoices</h1>

    <form action="{{ url('/subscribe') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Enter your email" required>
        <button type="submit">Subscribe</button>
    </form>
</body>
</html>
