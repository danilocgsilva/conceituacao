<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UsersRegisteringSystemController,
    AdminUserController,
    ProfileController
};

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/myself', [UsersRegisteringSystemController::class, 'myself'])
        ->name('myself.edit');
    Route::patch('/myself', [UsersRegisteringSystemController::class, 'updateMyself'])
        ->name('myself.update');
    Route::delete('/mysqlf', [UsersRegisteringSystemController::class, 'removeMyself'])
        ->name('mysqld.destroy');

    Route::get('/', [UsersRegisteringSystemController::class, "index"])
        ->name('users-registering.index');
    Route::get('/user', function() {
        return redirect(route('users-registering.index'));
    });
    Route::get('/user/create', [AdminUserController::class, "create"])
        ->name('user.create');
    Route::post('/user', [AdminUserController::class, "store"])
        ->name('user.store');
    Route::get('/user/{user}/edit/', [AdminUserController::class, "edit"])
        ->name('user.edit');
    Route::patch('/user/{user}/', [AdminUserController::class, "update"])
        ->name('user.update');
    Route::delete('/user/{user}/', [AdminUserController::class, "destroy"])
        ->name('user.destroy');

    Route::get('/profile', [ProfileController::class, "index"])
        ->name('profile.index');
    Route::get('/profile/create', [ProfileController::class, "create"])
        ->name('profile.create');
    Route::post('/profile', [ProfileController::class, "store"])
        ->name('profile.store');
    Route::get('/profile/{profile}/edit', [ProfileController::class, "edit"])
        ->name('profile.edit');
    Route::patch('/profile/{profile}', [ProfileController::class, "update"])
        ->name('profile.update');
    Route::delete('/profile/{profile}', [ProfileController::class, "destroy"])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';
