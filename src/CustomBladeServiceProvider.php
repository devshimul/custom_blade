<?php

namespace Devshimul\CustomBlade;

use Devshimul\CustomBlade\Commands\CreateBlade;
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
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                CreateBlade::class, 
            ]);
        }
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'CustomBlade');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations'); 
    }
}
