<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;
use App\Models\Article;
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
Route::get("/articles/edit/{id}", [ArticleController::class, "edit"]);
Route::post("/articles", [ArticleController::class, "store"]);
Route::post("/articles/{id}", [ArticleController::class, "update"]);

Route::get('/authors', [AuthorController::class, "index"]);
Route::get("/authors/new", [AuthorController::class, "create"]);
Route::get("/authors/edit/{id}", [AuthorController::class, "edit"]);
Route::post("/authors", [AuthorController::class, "store"]);
Route::post("/authors/{id}", [AuthorController::class, "update"]);