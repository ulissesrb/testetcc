<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('admin', function () {
            return Auth::check() ? ( Auth::user()->administrador ) : false;
        });

        Blade::if('colab', function () {
            return Auth::check() ? ( !Auth::user()->administrador ) : false;
        });

        Blade::if('guest', function () {
            return !Auth::check();
        });
    }
}
