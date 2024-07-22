<?php

namespace App\Http\Controllers;
  
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
 
class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
 
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
 
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
 
        return redirect('/login')->with('status', 'User created! Please Sign in. ');
    }

    public function showLoginForm()
	{
	    return view('auth.login');
	}
 
	public function login(Request $request)
	{
	    $credentials = $request->only('email', 'password');
	 
	    if (Auth::attempt($credentials)) {
	        return redirect()->intended('/dashboard');
	    }
	 
	    return redirect('/login')->with('status', 'Invalid credentials. Please try again.');
	}

	public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
 
        return redirect('login');
    }
}

