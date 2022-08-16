<?php

namespace Skys215\MaterializeTemplates;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class MaterializeTemplatesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'materialize-templates');
        $this->publishes([
            __DIR__.'/../views/common' => resource_path('views/vendor/materialize-templates/common'),
        ], 'materialize-views');

        $this->publishes([
            __DIR__.'/../views/templates' => resource_path('views/vendor/materialize-templates/templates'),
        ], 'materialize-templates');

        Paginator::defaultView('materialize-templates::common.paginator');
        Paginator::defaultSimpleView('materialize-templates::common.simple_paginator');

        Blade::directive('ocb', function () {
            return '<?php echo "{{ " ?>';
        });

        Blade::directive('ccb', function () {
            return '<?php echo " }}" ?>';
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
