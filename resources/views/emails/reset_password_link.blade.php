<!doctype html>
<html lang="en">
<head>
    <title>Password Reset Request</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <main class="container my-5">
        {{-- <h1>Password Reset Request</h1> --}}
        <p>Dear Customer,</p>
        <p>We received a request to reset your password for your Writing-Space account. Please click the link below to reset your password:</p>
        <p>
            <a href="{{ route('show.reset.password.form', ['token' => $token, 'email' => $email]) }}" class="btn btn-primary">
                Reset Password
            </a>
        </p>
        <p>This link will expire in one hour for your security.</p>
        <p>If you did not request this password reset, please ignore this email or contact support if you have questions.</p>
        <p>Best regards,<br>Writing-Space Support Team</p>
    </main>
</body>
</html>
