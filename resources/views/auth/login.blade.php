<x-app-layout>
<form action="{{route('login')}}" method="post">
      @csrf
            
            <div>
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" value="{{old('email')}}">
                  @error('email')
                  <div>{{$message}}</div>
                  @enderror

            </div>
            <div>
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" value="{{old('password')}}">
                  @error('password')
                  <div>{{$message}}</div>
                  @enderror
            </div>
            <div>
                  <input type="checkbox" name="remember" id="remember">
                  <label for="remember">Remember Me</label>
            </div>
            
<div><button type="submit">Login</button></div>
<div> <a href="{{route('password.request')}}">Forgetting Password</a></div>
      </form>
</x-app-layout>
