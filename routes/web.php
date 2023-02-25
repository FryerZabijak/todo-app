<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TodoController::class, "index"]);

Route::put("/todo/{id}", [TodoController::class, "update"]);

Route::delete("/todo/{id}", [TodoController::class, "destroy"]);

Route::get("/todo/create", [TodoController::class, "create"]);

Route::post("/todo/create", [TodoController::class, "store"]);

Route::get("/todo/{id}", [TodoController::class, "show"]);

Route::get("/login", [UserController::class, "login"])->middleware("guest");

Route::post("/authenticate", [UserController::class, "authenticate"])->middleware("guest");

Route::get("/register", [UserController::class, "create"])->middleware("guest");

Route::post("/register", [UserController::class, "store"])->middleware("guest");

Route::get("/logout", [UserController::class, "logout"]);