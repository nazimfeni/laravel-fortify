<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    
    public function show()
    {
        return view('profile.show', ['user' => Auth::user()]);
    }
    
    // Show the profile update form
    public function edit()
    {
      
     //return Auth::user();
    return view('profile.edit');
    }


    
    
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
        ]);

        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        // If password is also being updated
        if ($request->filled('password')) {
            $request->validate([
                'password' => 'required|string|min:8|confirmed',
            ]);
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();

        return redirect()->route('profile.show')->with('status', 'Profile updated!');
    }
}
