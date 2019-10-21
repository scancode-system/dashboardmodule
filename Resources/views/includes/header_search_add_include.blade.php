<div class="card-header">
	<div class="row">
		<div class="col">
			{{  Form::open(['route' => $route_search]) }}
			<div class="input-group">
				<span class="input-group-prepend">
					{{ Form::button('<i class="fa fa-search"></i>', ['class' => 'btn btn-primary', 'type' => 'submit']) }}
				</span>
				{{ Form::text('search', $search, ['class' => 'form-control', 'placeholder' => 'Pesquisar']) }}
			</div>
			{{ Form::close() }}
		</div>
		<div class="col text-right">
			<a href="{{ route($route_add) }}" class="btn btn-brand btn-primary">
				<i class="fa fa-plus-square-o"></i><span>Adicionar</span>
			</a>
		</div>
	</div>
</div>