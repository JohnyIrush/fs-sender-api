<?php

namespace Cchivhima\Sendfood;

use Illuminate\Support\ServiceProvider;

class SendFoodServiceProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__.'/views', 'sendfood');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'sendfood');
        
        
         $this->publishes([
             __DIR__.'/sendfoodassets' => public_path('sendfoodassets'),
         ], 'public'); //publish assets to public folder


         $this->publishes([
             __DIR__.'/database/seeders' => public_path('../database/seeders'),
         ], 'seeders'); //publish table seeders

         $this->publishes([
            __DIR__.'/vue' => public_path('../resources/js'),
        ], 'vue'); //publish vue components
        
    }
}
