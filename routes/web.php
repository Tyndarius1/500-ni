<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name( 'admin');

Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->name('student');
Route::resource('students', StudentController::class);
