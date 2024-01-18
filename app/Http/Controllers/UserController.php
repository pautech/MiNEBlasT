<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Retrieve all users from the database
        return view('users.dash', compact('users'));
    }

    public function dashboard()
    {
        return view('users.dash');
    }
    public function registration()
    {
        return view('users.register');
    }
    //
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'password_confirmation' => 'required|string|min:8',
        ]);
        // if ($request->password !== $request->password_confirmation) {
        //     return redirect()->back()->withErrors(['password_confirmation' => 'The password confirmation does not match.'])->withInput();
        // }
        // else{
            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'username' => strtolower($request->input('firstname')).'.'.strtolower($request->input('lastname')),
                'email' => strtolower($request->input('firstname')).'.'.strtolower($request->input('lastname')). '@example.com',
                'password' => bcrypt($request->password),
            ]);

            // Optionally, you can add email verification logic here

            return redirect()->route('ulogin')->with('success', 'User created successfully!'); // Redirect to home or any other route after registration
        // }
    }


    public function showLoginForm(Request $request)
    {
        // $username = $request->input('username');
        return view('users.login');
    }
    public function ulogin(Request $request)
    {
        // Validate the login request
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::guard('web')->attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/u');
        } else {
            // Authentication failed
            return back()->withErrors(['username' => 'Invalid credentials']);
        }
    }
    public function ulogout()
    {
        auth()->guard('web')->logout();

        return redirect('/')->with('success', 'You have been logged out successfully.');
    }

}
