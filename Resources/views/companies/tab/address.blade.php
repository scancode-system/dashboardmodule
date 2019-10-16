@if(session()->has('companies.edit'))
<div class="alert alert-success alert-dismissible fade show">
	{{ session()->get('companies.edit') }}
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

<div class="row">
	<div class="col">
		<div class="form-group">
			{{ Form::label('address', 'Rua') }}
			{{ Form::text('address', null, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('neighborhood', 'Bairro') }}
			{{ Form::text('neighborhood', null, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('city', 'Cidade') }}
			{{ Form::text('city', null, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('st', 'Estado') }}
			{{ Form::text('st', null, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('zip_code', 'CEP') }}
			{{ Form::text('zip_code', null, ['class' => 'form-control']) }}
		</div>
		{{ Form::submit('Salvar', ['class' => 'btn btn-primary']) }}
	</div>
</div>