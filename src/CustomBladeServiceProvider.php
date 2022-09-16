<?php

namespace Devshimul\Customblade;

use Illuminate\Support\ServiceProvider;

class CustomBladeServiceProvider extends ServiceProvider
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
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'Customblade');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }
}
