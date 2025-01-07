<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
;


    
Route::get('/', function () {

    return view('home');
});

//All Jobs 
Route::get('/jobs', [JobController::class, 'all']);
// Route::get("/jobs", function () {
//     // $job = Job::all();
//     $job = Job::with('employer')->latest()->cursorPaginate(5); //Paginate //cursorPaginate

//     return view("jobs.index", [
//         "jobs" => $job
//     ]);
// });



//Job Create Page
Route::get("/jobs/create", [JobController::class, 'create']);


//Store  a new job
Route::post('/jobs', [JobController::class, 'store']);



//Show the Job with Id
//route model binding ; 
Route::get("/jobs/{job}", [JobController::class, 'show']);




//Show the Edit Job Page with Id
//route model binding ; 
Route::get("/jobs/{job}/edit", [JobController::class, 'edit']);




//Update the  Job Page with Id
//route model binding ; 
Route::patch("/jobs/{job}", [JobController::class, 'update']);



//Delete the  Job Page with Id
//route model binding ; 
Route::delete("/jobs/{job}", [JobController::class, 'delete']);