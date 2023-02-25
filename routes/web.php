<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

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
