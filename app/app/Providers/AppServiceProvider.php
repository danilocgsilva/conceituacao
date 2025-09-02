<?php

namespace App\Providers;

use App\Contracts\ProfileRepositoryInterface;
use App\Repositories\ProfileRepository;
use Illuminate\Support\ServiceProvider;
use App\Contracts\UserRepositoryInterface;
use App\Repositories\UserRepository;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(ProfileRepositoryInterface::class, ProfileRepository::class);
    }

    public function boot(): void
    {
        //
    }
}
