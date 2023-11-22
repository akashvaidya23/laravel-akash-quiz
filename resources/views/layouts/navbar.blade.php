<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">
</head>
<body>
    <div>
        <ul class="navbar">
            <li class="brand"><a href="/">Quiz App</a></li>
            <li>About Us</li>
            <li>Careers</li>
            <li>Services</li>
            @if(Session::has('user'))
                <li class="logout">Logout</li>
            @else
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
            @endif
        </ul>
    </div>
</body>
</html>