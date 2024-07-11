<?php


use Illuminate\Support\Facades\Route;
use App\Models\job;

Route::get('', function () {

    return view('home');
});
Route::get('jobs', function () {
    return view('jobs', [
        "Jobs" => job::all()
    ]);
});
Route::get('job/{id}', function ($id) {
    return view('job', ['job' => job::find($id)]);
});
Route::get('contact', function () {
    return view('contact');
});
