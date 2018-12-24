<?php

namespace Jchegenye\MyFlashAlert;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\RedirectResponse;
use Jchegenye\MyFlashAlert\JTech\MyFlashAlerts;

    /**
     * Connection points between this package and Laravel applications.
     * 
     * @author Jackson A. Chegenye
     * @return void
     */
    class MyFlashAlertServiceProvider extends ServiceProvider 
    {

        /**
         * Perform post-registration booting of services.
         * 
         * @author Jackson A. Chegenye
         * @return void
         */
        public function boot()
        {

            $this->loadViewsFrom(__DIR__.'/resources/views', 'myflashalert');
            
            /**
             * Register the application's response macros.
             * 
             * @author Jackson A. Chegenye
             * @return $data
             */
            RedirectResponse::macro('success', function ($value  = null) {

                $func = new MyFlashAlerts();
                $data = $func->success($value);

                return $data;

            });

            RedirectResponse::macro('error', function ($value = null) {

                $func = new MyFlashAlerts();
                $data = $func->error($value);

                return $data;

            });

            RedirectResponse::macro('warning', function ($value = null) {

                $func = new MyFlashAlerts();
                $data = $func->warning($value);

                return $data;

            });
            
            RedirectResponse::macro('info', function ($value = null) {

                $func = new MyFlashAlerts();
                $data = $func->info($value);

                return $data;

            });

        }

        /**
         * Register bindings in the container.
         * 
         * @author Jackson A. Chegenye
         * @return void
         */
        public function register()
        {
            $this->app->singleton('myflashalert', function () {
                return $this->app->make('Jchegenye\MyFlashAlert\JTech\MyFlashAlerts');
            });
        }

    }