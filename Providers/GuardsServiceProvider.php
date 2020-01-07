<?php

namespace Modules\Dashboard\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Dashboard\Entities\Company;
use Modules\Dashboard\Entities\Admin;

class GuardsServiceProvider extends ServiceProvider {

    //protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        $defaults = [
            'guard' => 'company',
            'passwords' => 'users',
        ];

        config(['auth.defaults' => $defaults]);


        $guards = config('auth.guards');
        $guards['company'] = [
            'driver' => 'session',
            'provider' => 'companies',
        ];

        config(['auth.guards' => $guards]);

        $providers = config('auth.providers');
        $providers['companies'] =  [
            'driver' => 'eloquent',
            'model' => Company::class,
        ];

        config(['auth.providers' => $providers]);


        $passwords = config('auth.passwords');
        $passwords['companies'] =  [
            'provider' => 'companies',
            'table' => 'companies_password_resets',
            'expire' => 60,
        ];

        config(['auth.passwords' => $passwords]); 

        $filesystems = config('filesystems.disks');
        $filesystems['modules_assets'] =  [
            'driver' => 'local',
            'root' => public_path('modules'),
        ];

        config(['filesystems.disks' => $filesystems]);


        /* InnoDB */
        $mysql_setting = config("database.connections.mysql");
        $mysql_setting['engine'] = 'innodb';
        config(['database.connections.mysql' => $mysql_setting]);
    }

}