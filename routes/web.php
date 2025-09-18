<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


// students
Route::get('/students_excel', [StudentController::class, 'excel'])->name('students.excel');

Route::get('/students_test', [StudentController::class, 'test']);
Route::get('/students_child', [StudentController::class, 'child']);

Route::get('/pages_html', [StudentController::class, 'html'])->name('pages.html');
Route::get('/pages_js', [StudentController::class, 'js'])->name('pages.js');
// Route::get('/pages_js', [StudentController::class, 'js']);
Route::get('/pages_php', [StudentController::class, 'php']);
Route::get('/pages_python', [StudentController::class, 'python']);

Route::resource('students', StudentController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

// 轉址 / to route('students.index')
Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('students.index');
});