<?php

namespace App\Providers;

use App\Interfaces\Popup\PopupFactoryInterface;
use App\Popups\ExitIntentPopup;
use App\Popups\FullscreenPopup;
use App\Popups\SlideInPopup;
use Illuminate\Support\ServiceProvider;

class FactoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PopupFactoryInterface::class, FullscreenPopup::class);
        $this->app->bind(PopupFactoryInterface::class, SlideInPopup::class);
        $this->app->bind(PopupFactoryInterface::class, ExitIntentPopup::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
