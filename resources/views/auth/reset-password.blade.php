<x-app-layout>
<form action="{{route('password.update')}}" method="post">
      @csrf
            
            <div>
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" value="{{$request->email}}">
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
                  <label for="password_confirmation">Password Confirmation</label>
                  <input type="password" name="password_confirmation" id="password_confirmation" value="{{old('password_confirmation')}}">
                  
                  @error('password_confirmation')
                  <div>{{$message}}</div>
                  @enderror
</div>
<input type="hidden" name="token" value="{{request()->route('token')}}"> 
<div><button type="submit">Reset Password</button></div>
      </form>
</x-app-layout>
