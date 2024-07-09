<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortify</title>
</head>
<body>
<ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('login')}}">Login</a></li>
            <li><a href="{{route('register')}}">Register</a></li>
      </ul>

    {{$slot}}
</body>
</html>