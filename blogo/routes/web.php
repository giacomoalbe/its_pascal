<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;
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

Route::get('/', [ArticleController::class, "index"]);
Route::get("/articles/new", [ArticleController::class, "create"]);
Route::post("/articles", [ArticleController::class, "store"]);

Route::get('/authors', [AuthorController::class, "index"]);
Route::get("/authors/new", [AuthorController::class, "create"]);
Route::post("/authors", [AuthorController::class, "store"]);