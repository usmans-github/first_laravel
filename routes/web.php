<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Models\Job;



Route::get('/', function () {
  
    return view('home');
});

Route::get("/jobs", function () {
    return view("jobs", [
        "jobs" => Job::all()
    ]);
});

Route::get("/jobs/{id}", function ($id) {
    //Find that matchs the id
   $job  = Job::find($id);
    // dd($job);    
    return view("job", ["job" => $job]);
});

//Route for user Home
Route::get("/user-home", [UserController::class, "userHome"]);

//Route for admin Home
Route::get("/admin-home/{name}", [AdminController::class, "adminHome"]);
