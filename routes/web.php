<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('students', 'StudentController@index');

Route::resource('students', StudentController::class); // CRUD

Route::get('students', [StudentController::class, 'index']);
Route::get('students/add', [StudentController::class, 'create']);



Route::get('/user', function () {
    return view('student.index');
});
