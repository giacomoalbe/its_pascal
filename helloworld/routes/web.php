<?php

use App\Http\Controllers\CatController;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
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
    return view("welcome");
});

Route::get('/saluta/{nome}', function($nome) {
    return view("saluta", [
        "nome" => $nome,
    ]);
});

Route::get("/entusiasmo/{age}", function ($age) {
    return view("entusiasmo", [
        "age" => $age,
        "persone" => [
            "Marco",
            "Giacomo",
            "Nicolle",
            "Silvio Berluscono",
            "Ursula"
        ]
    ]);
});

Route::get("/students", [StudentController::class, "index"]);

Route::get("/students/{id}", function ($id) {
    $students = Student::list();
    
    $currentStudent = null;

    foreach ($students as $student) {
        if ($student['id'] == $id) {
            $currentStudent = $student;
            break;
        }
    }

    return view("review", [
        "id" => $id,
        "student" => $currentStudent,
    ]);
});


// Shoe Route

Route::get("/shoes", [ShoeController::class, "index"]);