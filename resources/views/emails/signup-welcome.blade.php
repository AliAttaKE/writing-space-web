<!DOCTYPE html>
<html>
<head>
    <title>Welcome to {{ config('app.name') }}</title>
</head>
<body>
    <h1>Welcome, {{ $user->name }}!</h1>
    <p>Thank you for signing up on {{ config('app.name') }}</p>
    <p>If you have any questions, feel free to contact our support team at support@writing-space.com</p>
</body>
</html>
