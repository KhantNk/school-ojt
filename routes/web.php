<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', [StudentController::class, 'index']);
// Route::get('/courses', [StudentController::class, 'index']);
// Route::get('/students/create', [StudentController::class, 'create']);
// Route::post('/students/store', [StudentController::class, 'store']);
// Route::get('/students/edit/{id}', [StudentController::class, 'edit']);
// Route::post('/students/update/{id}', [StudentController::class, 'update']);
// Route::get('/students/show/{id}', [StudentController::class, 'show']);
// Route::get('/students/delete/{id}', [StudentController::class, 'destroy']);

Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);
Route::resource('teachers', TeacherController::class);
