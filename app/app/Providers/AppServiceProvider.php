<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\UserRepositoryInterface;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);

        Blade::directive('currentPageClasses', function () {
            return "py-2 px-4 border border-gray-300 bg-blue-500 text-white hover:bg-blue-600 border-l-0";
        });

        Blade::directive('notCurrentPageClasses', function () {
            return "py-2 px-4 border border-gray-300 bg-white text-blue-500 hover:bg-gray-50 border-l-0";
        });
    }

    public function boot(): void
    {
        //
    }
}
