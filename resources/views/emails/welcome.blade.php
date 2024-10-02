<!DOCTYPE html>
<html>

<head>
    <title>Welcome to {{ config('app.name') }}</title>
</head>

<body>
    <h1>Hello, {{ $name }}!</h1>
    <p>We have registered a new account for you.</p>
    <p>Your password is: {{ $password }}</p>
    <p>Thank you</p>
    <p>Best regards,<br>{{ config('app.name') }} Team</p>
</body>

</html>
