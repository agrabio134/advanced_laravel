<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('index');
});


Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});


Route::get('/jobs/{id}', function ($id) {
    // dd($id);
    $job = Job::find($id);
  


    // dd($job);

    return view('job', ['job' => $job]);
});


Route::get('/contact', function () {
    return view('contact');
});
