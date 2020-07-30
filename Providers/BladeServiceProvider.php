<?php

namespace Modules\Dashboard\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Modules\Dashboard\View\Components\ModalViewComponent;


class BladeServiceProvider extends ServiceProvider {

	public function boot() {

		// directives
		Blade::directive('currency', function ($expression) {
			return "<?php echo 'R$' . number_format($expression, 2, ',', '.'); ?>";
		});
		Blade::directive('percentage', function ($expression) {
			return "<?php echo  number_format($expression, 2, ',', '.').'%'; ?>";
		});

		Blade::directive('datetime', function ($expression) {
			return "<?php echo (is_null({$expression}))?'Data não definida':{$expression}->format('d/m/Y H:i'); ?>";
		});

        // components
		//Blade::component('dashboard::components.modal_view_component', 'modal_view');
		//Blade::component('alert2', Teste::class);

		Blade::component('modal_view', ModalViewComponent::class);

        // includes
		Blade::include('dashboard::includes.modal_destroy_include', 'modal_destroy');
		Blade::include('dashboard::includes.header_search_add_include', 'header_search_add');
		Blade::include('dashboard::includes.alert_success_include', 'alert_success');
		Blade::include('dashboard::includes.alert_errors_include', 'alert_errors');
		Blade::include('dashboard::includes.loader', 'loader');

	}

	public function register() {
        //
	}

}
