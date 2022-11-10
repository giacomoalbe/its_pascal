<?php

use App\Http\Controllers\CourseController;
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
    return view('welcome');
});

Route::get("/courses", [CourseController::class, "index"]);
Route::get("/courses/create", [CourseController::class, "create"]);
Route::post("/course", [CourseController::class, "store"]);

Route::get("/students", [StudentController::class, "index"]);
Route::get("/students/create", [StudentController::class, "create"]);
Route::post("/student", [StudentController::class, "store"]);

