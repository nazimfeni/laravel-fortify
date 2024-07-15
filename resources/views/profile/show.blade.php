
<x-app-layout>
<h1>Profile</h1>
<p>Name: {{ $user->name }}</p>
<p>User Name: {{ $user->username }}</p>
<p>Email: {{ $user->email }}</p>
<a href="{{ route('profile.edit') }}">Edit Profile</a>


</x-app-layout>
