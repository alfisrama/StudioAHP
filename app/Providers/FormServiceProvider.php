<?php

namespace App\Providers;

use App\User;
use App\Studio;
use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //operator
        view()->composer('studio.form', function($view) {
            $view->with('operator', User::pluck('name', 'id'));
        });

        //studio
        view()->composer('booking.form', function($view) {
            $view->with('studio', Studio::pluck('nama_studio', 'id'));
        });

        //user
        view()->composer('booking.form', function($view) {
            $view->with('users', User::pluck('name', 'id'));
        });

        
        
    }
}
