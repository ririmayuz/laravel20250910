<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


// students
Route::get('/students_excel', [StudentController::class, 'excel']);
Route::get('/students_test', [StudentController::class, 'test']);
Route::resource('students', StudentController::class);

// Route::get('/', function () {
//     return view('welcome');
// });
