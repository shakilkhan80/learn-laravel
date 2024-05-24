<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);

        return view('job.index', [
            'jobs' => $jobs
        ]);
    }
    public function create()
    {

        return view('job.create');
    }
    public function show(Job $job)
    {

        return view('job.show', [
            'job' => $job
        ]);
    }
    public function store()
    {

        request()->validate([
            'title'   => ['required', 'min:3'],
            'sallary' => ['required', 'max:7'],
        ]);

        Job::create([
            'title'       => request('title'),
            'sallary'     => request('sallary'),
            'employer_id' => 1,
        ]);

        return redirect('/jobs');
    }
    public function edit(Job $job)
    {

        return view('job.edit', [
            'job' => $job
        ]);
    }
    public function update(Job $job)
    {

        request()->validate([
            'title'   => ['required', 'min:3'],
            'sallary' => ['required', 'max:7'],
        ]);

        //method-1
        // $job->title   = request('title');
        // $job->sallary = request('sallary');
        // $job->save();

        //method-2
        $job->update([
            'title'   => request('title'),
            'sallary' => request('sallary'),
        ]);

        return redirect('/jobs/' . $job->id);

    }
    public function destroy(Job $job)
    {

        $job->delete();

        return redirect('/jobs');
    }
}
