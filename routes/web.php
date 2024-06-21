<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/courses', [CourseController::class, 'showAll']);
Route::get('/students', [StudentController::class, 'showAll']);
