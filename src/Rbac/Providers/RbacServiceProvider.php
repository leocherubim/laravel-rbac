<?php

namespace Rbac\Providers;

use Illuminate\Support\ServiceProvider;

class RbacServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([__DIR__ . '/../../resources/migrations/' => base_path('database/migrations')], 'migrations');
        $this->publishes([__DIR__ . '/../../resources/config/rbac.php' => base_path('config')]);
        //$this->loadViewsFrom(__DIR__ .  '/../../resources/views/codecategory', 'codecategory');
        //require_once __DIR__ . '/../routes.php';
        //$this->
    }

    public function register()
    {

    }
}