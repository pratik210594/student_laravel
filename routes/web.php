<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EditStudentController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/list', [App\Http\Controllers\StudentController::class, 'show'])->name('list');
//Route::get('add-student', [App\Http\Controllers\HomeController::class, 'addStudent'])->name('addstudent');


//Route::delete('/home/{id}', [App\Http\Controllers\HomeController::class, 'deleteStudent']);
Route::post('add-student',[App\Http\Controllers\HomeController::class,'addStudent'])->name('student.add');