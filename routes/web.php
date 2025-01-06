<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Models\Job;



Route::get('/', function () {
  
    return view('home');
});

Route::get("/jobs", function () {
    // $job = Job::all();
    $job = Job::with('employer')->latest() ->cursorPaginate(3); //Paginate //cursorPaginate
    
    return view("jobs.index", [
        "jobs" => $job
    ]);
});


Route::get("/jobs/create", function(){
   return view('jobs.create');
});

//Route for creating a new job
Route::post('/jobs', function () {
//    dd(request()->all()); validation...


    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1

    ]);
    return redirect('/jobs');
});

Route::get("/jobs/{id}", function ($id) {
    //Find that matchs the id
   $job  = Job::find($id);
    // dd($job);    
    return view("jobs.show", ["job" => $job]);
});
    
//Route for user Home
Route::get("/user-ho}me", [UserController::class, "userHome"]);

//Route for admin Home
Route::get("/admin-home/{name}", [AdminController::class, "adminHome"]);
