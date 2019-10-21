<div class="row mb-3">
	<div class="col">
		{{  Form::open(['route' => 'orders.index']) }}
		<div class="input-group">
			<span class="input-group-prepend">
				{{ Form::button('<i class="fa fa-search"></i>', ['class' => 'btn btn-primary', 'type' => 'submit']) }}
			</span>
			{{ Form::text('search', '', ['class' => 'form-control', 'placeholder' => 'Pesquisar']) }}
		</div>
		{{ Form::close() }}
	</div>
	<div class="col text-right">
		{{  Form::open(['route' => 'order_items.store']) }}
		{{ Form::button('<i class="fa fa-plus-square-o"></i><span>Novo Item</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
		{{ Form::close() }}
	</div>
</div>
<table class="table table-responsive-sm bg-white table-hover border">
	@include('dashboard::orders.tables.edit.header')
	<tbody>
		@include('dashboard::orders.tables.edit.row')
		@include('dashboard::orders.tables.edit.row')
		@include('dashboard::orders.tables.edit.row')
		@include('dashboard::orders.tables.edit.row')
		@include('dashboard::orders.tables.edit.row')
		@include('dashboard::orders.tables.edit.row')
	</tbody>
</table>