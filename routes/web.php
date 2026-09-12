<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
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

Route::get('/users', [UserController::class, 'users']);

Route::get('/student-users', [StudentController::class, 'getStudentUsers']);

Route::get('/get-users', [UserController::class, 'getUsers']);

Route::get('/get-queries', [UserController::class, 'getQueries']);

Route::get('/get-queries2', [UserController::class, 'getQueries2']);
