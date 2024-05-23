<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {

    return view('home');
});
//index
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);

    return view('job.index', [
        'jobs' => $jobs
    ]);
});
//create
Route::get('/jobs/create', function () {

    return view('job.create');
});
//show
Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);

    return view('job.show', [
        'job' => $job
    ]);
});
//store
Route::post('/jobs', function () {

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
});
//edit
Route::get('/jobs/{id}/edit', function ($id) {

    $job = Job::find($id);

    return view('job.edit', [
        'job' => $job
    ]);
});

//update
Route::patch('/jobs/{id}', function ($id) {

    request()->validate([
        'title'   => ['required', 'min:3'],
        'sallary' => ['required', 'max:7'],
    ]);

    $job = Job::findOrFail($id);
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

});

//destroy
Route::delete('/jobs/{id}', function ($id) {

    Job::findOrFail($id)->delete();

    return redirect('/jobs');

});

Route::get('/contact', function () {
    return view('contact');
});
