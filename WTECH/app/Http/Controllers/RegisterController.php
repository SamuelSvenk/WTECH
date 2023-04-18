<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function index() 
    {
        return view('register');
    }

    public function store(Request $request) 
    {
        $input = $request->all();

        if ($request->has('checkbox')) 
        {
            User::create(
                [
                    'name' => $input['name'],
                    'surname' => $input['surname'],
                    'email' => $input['email'],
                    'password' => bcrypt($input['password']),
                ]
                );
        
                return redirect('/success')->with('is_success', 'Account successfully created.');
        } else {
            return redirect()->back()->withErrors(['register' => 'Agreement with terms of use is needed.']);
        }

        
    }
}
