<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Models\Job;



Route::get('/', function () {
  
    return view('home');
});

//All Jobs 
Route::get("/jobs", function () {
    // $job = Job::all();
    $job = Job::with('employer')->latest()->cursorPaginate(5); //Paginate //cursorPaginate
    
    return view("jobs.index", [
        "jobs" => $job
    ]);
});



//Job Create Page
Route::get("/jobs/create", function() {
   return view('jobs.create');
});


//Route for creating a new job
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1

    ]);
    return redirect('/jobs');
});



//Show the Job with Id
Route::get("/jobs/{id}", function ($id) {
    //Find that matchs the id
   $job  = Job::find($id);
    // dd($job);    
    return view("jobs.show", ["job" => $job]);
});
    



//Show the Edit Job Page with Id
Route::get("/jobs/{id}/edit", function ($id) {
    //Find that matchs the id
   $job  = Job::find($id);
    // dd($job);    
    return view("jobs.edit", ["job" => $job]);
});




//Update the  Job Page with Id
Route::patch("/jobs/{id}", function ($id) {
    //validate
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    //authorize...

    //Find the Job
    $job = Job::findOrFail($id);

    //Update the job 
    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    //Redirect to particular job
    return redirect('/jobs/'. $job->id);
});
    


//Delete the  Job Page with Id
Route::delete("/jobs/{id}", function ($id) {
    //authorize...

    //delete the job
    Job::findOrFail( $id )->delete();
    
    //Redirect
    return redirect('/jobs');
});
    


//Route for user Home
Route::get("/user-ho}me", [UserController::class, "userHome"]);

//Route for admin Home
Route::get("/admin-home/{name}", [AdminController::class, "adminHome"]);
