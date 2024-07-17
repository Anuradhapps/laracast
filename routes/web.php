<?php


use Illuminate\Support\Facades\Route;
use App\Models\job;

Route::get('', function () {
    return view('home');
});

Route::get('job/create',function(){
    return view('jobs.create');
});

Route::get('jobs', function () {
    $jobs =job::with('employer')->Paginate(3);
    return view('jobs.index', [
        "Jobs" => $jobs
    ]);
});

Route::get('job/{id}', function ($id) {
    return view('jobs.show', ['job' => job::find($id)]);
});

Route::get('contact', function () {
    return view('contact');
});
