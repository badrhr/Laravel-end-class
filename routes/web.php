<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    $jobs = Job::simplepaginate(15);
    return view('home', ['jobs' => $jobs]);
});

//Route::get('jobs/show/{job}', [JobController::class, 'show']);

Route::resource('jobs', JobController::class );
//Route::get('jobs/show/{job}', [JobController::class, 'show']);


//
//Route::get('/jobs', [JobController::class, 'index']);
//
//
//Route::get('jobs/show/{job}' , [JobController::class, 'show']);


//Route::get('/jobs', function () {
//    $jobs = Job::latest()->paginate(5);
//    return view('jobs/index', ['jobs' => $jobs]);
//});

//Route::get('jobs/show/{job}', [JobController::class, 'show']);

//Route::get('jobs/show/{job}', function (Job $job) {
//    return view('jobs/show', ['job' => $job]);
//});
//
//Route::post('jobs/create', function () {
//    request()->validate([
//        'title' => ['required', 'min:3'],
//        'salary' => ['required']
//    ]);
//
//    Job::create([
//        'title' => request('title'),
//        'salary' => request('salary'),
//        'employer_id' => 1
//    ]);
//    return redirect('/jobs');
//});
//
//Route::patch('/jobs/{job}', function (Job $job) {
//    request()->validate([
//        'title' => ['required', 'min:3'],
//        'salary' => ['required']
//    ]);
//
//    $job->title = request('title');
//    $job->salary = request('salary');
//    $job->save();
//    return redirect('jobs/show/' . $job->id);
//});
//
//Route::delete('/jobs/{job}', function (Job $job) {
//    $job->delete();
//    return redirect('/');
//});
//
//Route::get('/jobs/{job}/edit', function (Job $job) {
//    return view('jobs/edit', ['job' => $job]);
//});
//
//Route::view('jobs/create', 'jobs/create');

Route::view('/contact', 'contact');
