<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersRegisteringSystemController;

Route::get('/', [UsersRegisteringSystemController::class, "index"])
    ->name('users-registering.index')
    ->middleware('auth');
Route::get('/login', [UsersRegisteringSystemController::class, "login"])
    ->name('login');
Route::get('/template', [UsersRegisteringSystemController::class, "template"]);
