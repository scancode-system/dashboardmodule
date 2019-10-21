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

<h3 class="mb-3">Obrigatoriedade</h3>

<div class="form-group row">
	<label for="staticEmail" class="col-sm-2 col-form-label">Razão Social</label>
	<div class="col-sm-10">
		<label class="switch switch-primary switch-lg mb-0 ml-3">
			<input type="checkbox" class="switch-input" checked>
			<span class="switch-slider"></span>
		</label>
	</div>
</div>
<div class="form-group row">
	<label for="staticEmail" class="col-sm-2 col-form-label">CNPJ</label>
	<div class="col-sm-10">
		<label class="switch switch-primary switch-lg mb-0 ml-3">
			<input type="checkbox" class="switch-input" checked>
			<span class="switch-slider"></span>
		</label>
	</div>
</div>
<div class="form-group row">
	<label for="staticEmail" class="col-sm-2 col-form-label">Telefone</label>
	<div class="col-sm-10">
		<label class="switch switch-primary switch-lg mb-0 ml-3">
			<input type="checkbox" class="switch-input" checked>
			<span class="switch-slider"></span>
		</label>
	</div>
</div>
<div class="form-group row">
	<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
	<div class="col-sm-10">
		<label class="switch switch-primary switch-lg mb-0 ml-3">
			<input type="checkbox" class="switch-input" checked>
			<span class="switch-slider"></span>
		</label>
	</div>
</div>
<div class="form-group row">
	<label for="staticEmail" class="col-sm-2 col-form-label">Comprador</label>
	<div class="col-sm-10">
		<label class="switch switch-primary switch-lg mb-0 ml-3">
			<input type="checkbox" class="switch-input" checked>
			<span class="switch-slider"></span>
		</label>
	</div>
</div>

<hr>
<h3>Cliente em eventos</h3>
<div class="form-row">
	<div class="form-group col-md-12">
		{{ Form::label('start_id_order', 'Número inicial do clientes novos', ['data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Aqui voce pode selecionar a partir de que numero os pedidos se iniciam']) }}
		{{ Form::number('start_id_order', null, ['class' => 'form-control']) }}
		<small class="form-text text-muted">
			Observação: Somente será considerado clientes novos, clientes que foram cadastrados entre as datas do evento
		</small>
	</div>
</div>

{{ Form::submit('SALVAR', ['class' => 'btn btn-primary']) }}
