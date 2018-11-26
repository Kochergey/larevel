<?php

namespace App\Providers;
Use View;

use Illuminate\Support\ServiceProvider;

class SiteProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       View::composer('layouts\base', 'App\Providers\ViewComposers\SizeComposer');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
