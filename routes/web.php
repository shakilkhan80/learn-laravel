<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {

    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->simplePaginate(3);

    return view('job.index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {

    return view('job.create');
});

Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);

    return view('job.show', [
        'job' => $job
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
