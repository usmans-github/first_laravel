<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    //All Jobs 
    public function index()
    {
        $job = Job::all();
        $job = Job::with('employer')->latest()->cursorPaginate(5); //Paginate //cursorPaginate

        return view("jobs.index", [
            "jobs" => $job
        ]);
    }


    //Show the Job with Id
    //route model binding ; 
    public function show(Job $job)
    {
        return view("jobs.show", ["job" => $job]);
    }


    //Show Job Create Page
    public function create()
    {

        return view('jobs.create');
    }

    //Store  a new job
    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1

        ]);

        Mail::to($job->employer->user)->queue(
            new JobPosted($job)
        );

        return redirect('/jobs');
    }


    //Show the Edit Job Page with Id
    //route model binding ; 
    public function edit(Job $job)
    {

        // Gate::authorize('edit-job', $job);
        return view('jobs.edit', ['job' => $job]);
    }


    //Edit the job 
    //route model binding ; 
    public function update(Job $job)
    {
        //authorize...
        // Gate::authorize('edit-job', $job);  
        //validate
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);


        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);

        //Redirect to particular job
        return redirect('/jobs/' . $job->id);
    }

    //Delete the Job
    //route model binding ; 
    public function destroy(Job $job)
    {
        //authorize...
        Gate::authorize('edit-job', $job);

        //delete the job
        $job->delete();

        //Redirect
        return redirect('/jobs');
    }
}
