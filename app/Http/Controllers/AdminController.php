<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Admin Controller
    function adminHome ($name) {
        return view("admin.home", ["name" => $name]);
    }
}
