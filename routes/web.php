<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, "index"]);
Route::get("/lost", [MainController::class,"lost"]);
Route::get("/corsa/{id}", [MainController::class,"get"])->where(['id' => '[0-9]+']);
