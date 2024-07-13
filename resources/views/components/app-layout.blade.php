<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortify</title>
</head>
<body>
<ul>
    @guest
            <li><a href="{{route('register')}}">Register</a></li>
            <li><a href="{{route('login')}}">Login</a></li>
    @endguest
    
   
   <!-- logged in user can access the Dashboard only -->
    @auth
    <li><a href="">{{auth()->user()->name}}</a></li>
    <li><a href="{{route('dashboard')}}">Dashboard</a></li>
    <li><a href="{{route('auth.password')}}">Change Password</a></li>
    <li><a href="{{route('account.delete')}}">Account Delete</a></li>
   
    <li><form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form></li>
    @endauth
    <li><a href="{{route('home')}}">Home</a></li>      
      </ul>

    {{$slot}}
</body>
</html>