
<x-app-layout>

<div class="container">
    <h1>Update Profile</h1>
    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name', auth()->user()->name) }}" required autofocus class="form-control">
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input id="username" type="text" name="username" value="{{ old('username', auth()->user()->username) }}" required autofocus class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email', auth()->user()->email) }}" required class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Password (leave blank if not changing)</label>
            <input id="password" type="password" name="password" class="form-control">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div> 

</x-app-layout>