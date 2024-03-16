<?php

namespace App\Providers;

use App\Repositories\AuthRepository;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\Auth\AuthRepositoryInterface;
use App\Interfaces\Popup\PopupInteractionRepositoryInterface;
use App\Repositories\PopupInteractionRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(AuthRepositoryInterface::class, AuthRepository::class);
        $this->app->bind(PopupInteractionRepositoryInterface::class, PopupInteractionRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
