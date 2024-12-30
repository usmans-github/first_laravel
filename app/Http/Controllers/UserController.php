<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //userHome
    function userHome () {
        return view("home");
    }
}
    