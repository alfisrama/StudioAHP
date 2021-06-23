<?php

namespace App\Providers;

use Request;
use Illuminate\Support\ServiceProvider;

class PageServiceProvider extends ServiceProvider
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
        $coba = 'isinya 1';
        $cobaa = 'isinya 2';
        
        view()->share('coba', $coba);
        view()->share('cobaa', $cobaa);
    }
}
