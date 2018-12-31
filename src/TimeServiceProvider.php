<?php

namespace Alitakhti\Time;

use Alitakhti\Time\Middlewares\CheckTime;
use Illuminate\Support\ServiceProvider;

class TimeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //route
        if(! $this->app->routesAreCached())
        {
            require __DIR__.'/routes.php';
        }

        //view
        $this->loadViewsFrom(__DIR__.'/Views','MyView');

        $this->publishes([
            __DIR__.'/Views'=> resource_path('views/vendor/MyView'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/Config/config.php','MyConfig'
        );

        /*$this->mergeConfigFrom([
            __DIR__.'Config/config.php'=>config_path('MyConfig.php'),
        ]);*/

        //middleware
        /*$router=$this->app['router'];
        //dd($router);    show router
        $router->middleware('checkTime',CheckTime::class);*/

    }
}
