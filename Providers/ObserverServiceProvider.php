<?php

namespace Modules\Dashboard\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Dashboard\Entities\Company;
use Modules\Dashboard\Observers\CompanyObserver;
use Modules\Dashboard\Entities\CompanyInfo;
use Modules\Dashboard\Observers\CompanyInfoObserver;


class ObserverServiceProvider extends ServiceProvider {

	public function boot() {
		Company::observe(CompanyObserver::class);
		CompanyInfo::observe(CompanyInfoObserver::class);
	}

	public function register() {
        //
	}

}
