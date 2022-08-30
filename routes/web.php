<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CustomAuthController;
use Psy\Readline\Userland;

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

Route::get('student-list',[StudentController::class, 'Index']);
Route::get('add-student',[StudentController::class, 'addStudent']);
Route::post('save-student',[StudentController::class, 'saveStudent']);
Route::get('edit-student/{id}',[StudentController::class, 'editStudent']);
Route::post('update-student',[StudentController::class, 'updateStudent']);
Route::get('delete-student/{id}',[StudentController::class, 'deleteStudent']);

Route::get('/login',[CustomAuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/registration',[CustomAuthController::class, 'registration']);
Route::post('/register-user',[CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuthController::class,'loginuser'])->name('login-user');
Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/logout',[CustomAuthController::class,'logout']);