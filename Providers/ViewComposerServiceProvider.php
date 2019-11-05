<?php

namespace Modules\Dashboard\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class ViewComposerServiceProvider extends ServiceProvider {

	public function boot() {

        // layouts
		View::composer('dashboard::layouts.master', 'Modules\Dashboard\Http\ViewComposers\Layouts\MasterComposer');

        // companies
		View::composer('dashboard::companies.edit', 'Modules\Dashboard\Http\ViewComposers\Company\EditComposer');

		// settings
		View::composer('dashboard::settings.index', 'Modules\Dashboard\Http\ViewComposers\Setting\IndexComposer');
	}

	public function register() {
        //
	}

}
