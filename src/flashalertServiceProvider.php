<?php

namespace jchegenye\flashalert;

use Illuminate\Support\ServiceProvider;

class flashalertServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'jchegenye');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'jchegenye');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/flashalert.php', 'flashalert');

        // Register the service the package provides.
        $this->app->singleton('flashalert', function ($app) {
            return new flashalert;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['flashalert'];
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
            __DIR__.'/../config/flashalert.php' => config_path('flashalert.php'),
        ], 'flashalert.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/jchegenye'),
        ], 'flashalert.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/jchegenye'),
        ], 'flashalert.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/jchegenye'),
        ], 'flashalert.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
