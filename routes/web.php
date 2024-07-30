<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;



Route::view('/','home');
Route::view('/contact','contact');

Route::controller(JobController::class)->group(function(){
    Route::get('/job','index');
    Route::get('/job/create','create');
    Route::get('/job/{job}','show');
    Route::post('/job','store')->middleware('auth');
    Route::get('/job/{job}/edit','edit')->middleware('auth')->can('edit','job');
    Route::patch('/job/{job}','update');
    Route::delete('/job/{job}','destroy');
});

//Auth
Route::get('/register',[RegisteredUserController::class,'create']);
Route::post('/register',[RegisteredUserController::class,'store']);

Route::get('/login',[SessionController::class,'create']);
Route::post('/login',[SessionController::class,'store']);
Route::post('/logout',[SessionController::class,'destroy']);










