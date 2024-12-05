<?php

namespace App\Providers;

namespace App\Filament\Resources;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Artisan;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Automatically run db:seed after migrate:fresh command
        if ($this->app->runningInConsole()) {
            Artisan::command('migrate:fresh', function () {
                Artisan::call('migrate');
                Artisan::call('db:seed');
            });
        }
    }
}
