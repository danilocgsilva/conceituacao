<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UsersRegisteringSystemController,
    AdminUserController
};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/myself', [UsersRegisteringSystemController::class, 'myself'])
        ->name('myself.edit');
    Route::patch('/myself', [UsersRegisteringSystemController::class, 'updateMyself'])
        ->name('myself.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
    Route::get('/', [UsersRegisteringSystemController::class, "index"])
        ->name('users-registering.index');
    Route::get('/user/edit/{user}/', [AdminUserController::class, "edit"])
        ->name('user.edit');
    Route::delete('/user/{user}/', [AdminUserController::class, "destroy"])
        ->name('user.destroy');
});

require __DIR__.'/auth.php';
