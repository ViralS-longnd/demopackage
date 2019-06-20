<?php

namespace Longnd\DemoPackage;

use Illuminate\Support\ServiceProvider;

class DemoPackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/demopackage.php', 'demopackage'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/demopackage.php' => config_path('demopackage.php'),
        ]);

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->loadTranslationsFrom(__DIR__.'/resources/lang/en', 'demo');

        $this->publishes([
            __DIR__.'/resources/lang' => resource_path('lang/vendor/demo'),
        ]);

        $this->loadViewsFrom(__DIR__.'/resources/views', 'demopackage');

        $this->loadRoutesFrom(__DIR__.'/routes/demo.php');
    }
}
