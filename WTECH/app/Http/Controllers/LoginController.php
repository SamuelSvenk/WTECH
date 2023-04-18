<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() 
    {
        return view('login');
    }

    public function check(Request $request) 
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) 
        {
            $user = Auth::user();
            return redirect('/success')->with('is_success', 'Welcome, ' . $user->name);
        } else {
            return redirect()->back()->withErrors(['login' => 'Wrong email or password']);
        }
    }

    public function logout()
    {
        Auth::logout();
    
        return redirect('/success')->with('is_success', 'You have been logged out.');
    }
}

