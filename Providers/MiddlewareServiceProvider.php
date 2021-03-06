<?php

namespace Modules\Dashboard\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Modules\Dashboard\Http\Middleware\AuthenticateOnceWithBasicAuth;

class MiddlewareServiceProvider extends ServiceProvider {

    //protected $defer = true;
 
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Router $router) {
        $router->aliasMiddleware('auth.basic.once', AuthenticateOnceWithBasicAuth::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {   
    }

}