<div class="row">
	@foreach($widgets as $widget)
	@include($widget->view)
	@endforeach
</div>