<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
</head>
<body>
    @include('layouts/navbar')
    <div class="main">
        <h3>Login Page</h3>
        <form action="#" method="post">
            <div>
                <input class="form-control" type="text" name="name" id="name" placeholder="Enter name">
            </div>
            <br>
            <div>
                <input class="form-control" type="text" name="email" id="email" placeholder="Enter Username/Email">
            </div>
            <br>
            <div>
                <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password">
            </div>
            <br>
            <div>
                <input class="form-control" type="password" name="c_password" id="c_password" placeholder="Confirm Password">
            </div>
            <br>
            <div class="buttons">
                <button class="submit_btn">Submit</button>
            </div>
        </form>
    </div>
    
</body>
</html>