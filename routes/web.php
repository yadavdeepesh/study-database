<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
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

// all types routes request
// Route::get('/test-get', [TestController::class, 'get']);
// Route::post('/test-post', [TestController::class, 'post']);

// Route::put('/test-put', [TestController::class, 'put']);
// Route::patch('/test-patch', [TestController::class, 'patch']);
// Route::delete('/test-delete', [TestController::class, 'delete']);

// any method is used to handle all types of request
// Route::any('/test-any', [TestController::class, 'any']);

// match method is used to handle multiple types of request
Route::match(['get', 'post'], '/test-match', [TestController::class, 'group1']);
Route::match(['put','delete'],'/test-match',[TestController::class, 'group2']);

Route::post('/test-request', [TestController::class, 'login']);

Route::view('user-form', 'user-form');
