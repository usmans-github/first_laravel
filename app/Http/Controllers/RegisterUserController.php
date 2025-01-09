<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function create() {
       return view('auth.register');
    }

    public function store() {
       //First of all validate 
       $validatedAttributes = request()->validate([
        'first_name' => ['required'],
        'last_name' => ['required'],
        'email' => ['required', 'email'],
        'password' => ['required', 'confirmed', Password::min(6)],
       ]);
       //Create the user 
       $user = User::create($validatedAttributes); 
       //Login the user
       Auth::login($user);
       //Redirect to somewhere
       return redirect('/jobs'); 
    }
}
