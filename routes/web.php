<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello from Laravel'
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Job::all()]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find((int) $id);

    if (! $job) {
        abort(404);
    }

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});