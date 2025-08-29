<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersRegisteringSystemController;

Route::get('/', [UsersRegisteringSystemController::class, "index"]);
Route::get('/login', [UsersRegisteringSystemController::class, "login"]);
Route::get('/template', [UsersRegisteringSystemController::class, "template"]);
