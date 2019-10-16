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
	<div class="form-group col-md-12">
		{{ Form::label('start_id_order', 'Número inicial dos pedidos', ['data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Aqui voce pode selecionar a partir de que numero os pedidos se iniciam']) }}
		{{ Form::number('start_id_order', null, ['class' => 'form-control']) }}
	</div>
</div>
<div class="form-group">
	{{ Form::label('note', 'Observação', ['data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Configure a observacao que sera exibida em todas as vias impressas dos pedidos']) }}
	{{ Form::textarea('note', null, ['class' => 'form-control', 'placeholder' => '']) }}
</div>
<div class="form-group">
	{{ Form::label('note', 'Termo', ['data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Configure a observacao que sera exibida em todas as vias impressas dos pedidos']) }}
	{{ Form::textarea('note', null, ['class' => 'form-control', 'placeholder' => '']) }}
</div>

{{ Form::submit('SALVAR', ['class' => 'btn btn-primary']) }}
