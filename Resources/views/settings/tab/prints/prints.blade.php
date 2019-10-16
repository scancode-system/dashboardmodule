@if(session()->has('success_client_setting'))
<div class="alert alert-success alert-dismissible fade show">
	{{ session()->get('success_client_setting') }}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
	<ul class="mb-0">
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<div class="form-row">
	<div class="form-group col-md-6">
		{{ Form::label('start_id_order', 'Nome da Impressora', ['data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Aqui voce pode selecionar a partir de que numero os pedidos se iniciam']) }}
		{{ Form::text('start_id_order', null, ['class' => 'form-control']) }}
	</div>
	<div class="form-group col-md-6">
		{{ Form::label('start_id_order', 'Quantidade de vias', ['data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Aqui voce pode selecionar a partir de que numero os pedidos se iniciam']) }}
		{{ Form::number('start_id_order', null, ['class' => 'form-control']) }}
	</div>
</div>


{{ Form::submit('SALVAR', ['class' => 'btn btn-primary']) }}
