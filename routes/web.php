<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'greetings' => 'Hello World!',
        'name'      => 'Laravel',
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id'      => 1,
                'title'   => 'Developer',
                'company' => 'Google',
                'salary'  => 10000
            ],
            [
                'id'      => 2,
                'title'   => 'Marketer',
                'company' => 'Youtube',
                'salary'  => 30000
            ],
            [
                'id'      => 3,
                'title'   => 'Investor',
                'company' => 'Tesla',
                'salary'  => 200000
            ],
        ]
    ]);
});
Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id'      => 1,
            'title'   => 'Developer',
            'company' => 'Google',
            'salary'  => 10000
        ],
        [
            'id'      => 2,
            'title'   => 'Marketer',
            'company' => 'Youtube',
            'salary'  => 30000
        ],
        [
            'id'      => 3,
            'title'   => 'Investor',
            'company' => 'Tesla',
            'salary'  => 200000
        ],
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', [
        'job' => $job
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
