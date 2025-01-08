<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create() {
        return view('auth.login');
    }
    public function store() {
        //First of all validate
        $validatedAttributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(6)]
        ]);
        //Attempt to login the user
        if(! Auth::attempt($validatedAttributes)){
            throw ValidationException::withMessages([
                'email' => 'Sorry, credentials are not match.'
            ]);
        };
        //Regenerate the session token
        request()->session()->regenerate();
        //Redirect 
        return redirect('/jobs');
      ;
    } 
    public function destroy() {
        Auth::logout();    
        return redirect('/');
    } 
}
