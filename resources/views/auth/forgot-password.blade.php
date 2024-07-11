<x-app-layout>
<form action="{{route('password.email')}}" method="post">
      @csrf
            
            <div>
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" value="{{old('email')}}">
                  @error('email')
                  <div>{{$message}}</div>
                  @enderror

            </div>
            
            
<div><button type="submit">Reset Request Password</button></div>

      </form>
</x-app-layout>
