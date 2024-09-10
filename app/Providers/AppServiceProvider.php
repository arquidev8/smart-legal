<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App; // Asegúrate de importar la clase App

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
    // app/Providers/AppServiceProvider.php
    public function boot()
{
    view()->composer('*', function ($view) {
        App::setLocale(session('locale', config('app.locale')));
    });
}
}
