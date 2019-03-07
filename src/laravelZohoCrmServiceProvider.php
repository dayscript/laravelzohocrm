<?php

namespace dayscript\laravelZohoCrm;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Route;

class laravelZohoCrmServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'dayscript');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravelzohocrm');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }

        // $this->publishes([
        //   __DIR__.'/../resources/views' => resource_path('views/vendor/laravelZohoCrm'),
        // ]);

        $this->publishes([
          __DIR__.'/../resources/assets' => public_path('vendor/laravelZohoCrm/assets'),
        ], 'public');

    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravelzohocrm.php', 'laravelzohocrm');

        // Register the service the package provides.
        $this->app->singleton('laravelzohocrm', function ($app) {
            return new laravelZohoCrm;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravelzohocrm'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/laravelzohocrm.php' => config_path('laravelzohocrm.php'),
        ], 'laravelzohocrm.config');

        // Publishing the views.
        // $this->publishes([
        //     __DIR__.'/../resources/views' => base_path('resources/views/vendor/laravelZohoCrm'),
        // ], 'laravelzohocrm.views');

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/dayscript'),
        ], 'laravelzohocrm.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/dayscript'),
        ], 'laravelzohocrm.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
