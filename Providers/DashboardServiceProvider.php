<?php

namespace Modules\Dashboard\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Facades\Schema;
use Modules\Dashboard\Console\RefreshLogin;

class DashboardServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $this->app->setLocale('pt');

        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerFactories();
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

//        dd(config('app.timezone'));
        date_default_timezone_set('America/Sao_Paulo');
  //      \Config::set('app.timezone', 'America/Sao_Paulo');
            //    config(['app.timezone' => 'America/Sao_Paulo']);
               // config(['app.timezone' => 'America/Chicago']);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
               // \Config::set('app.timezone', 'America/Sao_Paulo');
                       //config(['app.timezone' => 'America/Sao_Paulo']);

        $this->app->register(RouteServiceProvider::class);
        $this->app->register(BladeServiceProvider::class);
        $this->app->register(ViewComposerServiceProvider::class);
        $this->app->register(GuardsServiceProvider::class);
        $this->app->register(ObserverServiceProvider::class);
        $this->app->register(MiddlewareServiceProvider::class);

        $this->commands([RefreshLogin::class]);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('dashboard.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'dashboard'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/dashboard');

        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/dashboard';
        }, \Config::get('view.paths')), [$sourcePath]), 'dashboard');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/dashboard');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'dashboard');
        } else {
            $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'dashboard');
        }
    }

    /**
     * Register an additional directory of factories.
     *
     * @return void
     */
    public function registerFactories()
    {
        if (! app()->environment('production') && $this->app->runningInConsole()) {
            app(Factory::class)->load(__DIR__ . '/../Database/factories');
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
