<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\User; // Make sure to import the User model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
public function showLoginForm()
{
return view('auth.login');
}

public function showRegistrationForm()
{
return view('auth.register');
}
public function login(Request $request)
{
$credentials = $request->only('email', 'password');

// Attempt to log the user in
if (Auth::attempt($credentials)) {
// Redirect to the intended page or default to '/notes'
return redirect()->intended('/notes');
}

// If authentication fails, redirect back to the login page with an error message
return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
}



public function register(Request $request)
{
// Validate the input
$validator = Validator::make($request->all(), [
'name' => 'required|string|max:255',
'email' => 'required|string|email|max:255|unique:users',
'password' => 'required|string|min:8|confirmed', // Ensure password confirmation field exists
]);

if ($validator->fails()) {
return redirect()->back()->withErrors($validator)->withInput();
}

// Create the new user
$user = User::create([
'name' => $request->name,
'email' => $request->email,
'password' => Hash::make($request->password),
]);

// Log the user in after registration
Auth::login($user);

return redirect('/notes');
}
}
=======
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function showLoginForm()
{
    return view('auth.login');
}

public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->intended('/');
    }

    return redirect('/login')->with('error', 'Invalid credentials. Please try again.');
}
public function showRegistrationForm()
{
    // Return the registration view
    return view('auth.register'); // Adjust this view path based on your app
}
public function register(Request $request)
    {
        // Validate incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed', // Ensure 'password_confirmation' field is included
        ]);

        // Create the user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']), // Hash password
        ]);

        // Optionally, log the user in after registration
        auth()->login($user);

        // Redirect the user to a desired page, e.g., the home page
        return redirect()->route('home'); // Update the route name as needed
    }
}
>>>>>>> 0a266ac610b9e19484e347233c42fb3658a77814
