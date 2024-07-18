<?php


use Illuminate\Support\Facades\Route;
use App\Models\job;


Route::get('/', function () {
    return view('home');
});

Route::get('/job/create', function () {
    return view('jobs.create');
});
Route::post('/jobs', function () {
    request()->validate([
        'Title'=>['required','min:3'],
        'Salary'=>['required']
    ]);
    Job::create([
        'Title' => request('Title'),
        'Salary' => request('Salary'),
        'employer_id' => 1
    ]);
    return redirect('/jobs');
});

Route::get('/jobs', function () {
    $jobs = job::with('employer')->latest()->Paginate(3);
    return view('jobs.index', [
        "Jobs" => $jobs
    ]);
});

Route::get('/job/{id}', function ($id) {
    return view('jobs.show', ['job' => job::find($id)]);
});

Route::get('/contact', function () {
    return view('contact');
});
