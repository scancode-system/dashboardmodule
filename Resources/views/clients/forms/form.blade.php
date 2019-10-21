@alert_errors()

@if(isset($client))
{{ Form::open($client, ['route' => ['clients.update', $client], 'method' => 'put']) }}
@else
{{ Form::open(['route' => 'clients.store']) }}
@endif

<h5>Dados</h5>
<hr>
<div class="form-group">
	{{ Form::label('corporate_name', 'Razão Social') }}
	{{ Form::text('corporate_name', old('corporate_name'), ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('fantasy_name', 'Nome Fantasia') }}
	{{ Form::text('fantasy_name', old('fantasy_name'), ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('cpf_cnpj', 'CPF/CNPJ') }}
	{{ Form::text('cpf_cnpj', old('cpf_cnpj'), ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('sku', 'Referência') }}
	{{ Form::text('sku', old('sku'), ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('buyer', 'Comprador') }}
	{{ Form::text('buyer', old('buyer'), ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('email', 'Email') }}
	{{ Form::text('email', old('email'), ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('ddd', 'DDD') }}
	{{ Form::text('ddd', old('ddd'), ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('phone', 'Telefone') }}
	{{ Form::text('phone', old('phone'), ['class' => 'form-control']) }}
</div>
<h5>Endereço</h5>
<hr>
<div class="form-group">
	{{ Form::label('street', 'Rua/AV') }}
	{{ Form::text('street', old('street'), ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('number', 'Número') }}
	{{ Form::number('number', old('number'), ['class' => 'form-control', 'step' => '0.1']) }}
</div>
<div class="form-group">
	{{ Form::label('apartment', 'Apartamento') }}
	{{ Form::text('apartment', old('apartment'), ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('neighborhood', 'Bairro') }}
	{{ Form::text('neighborhood', old('neighborhood'), ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('city', 'Cidade') }}
	{{ Form::text('city', old('city'), ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('st', 'Estado') }}
	{{ Form::text('st', old('st'), ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('postcode', 'CEP') }}
	{{ Form::text('postcode', old('postcode'), ['class' => 'form-control']) }}
</div>
<div class="form-group  mb-0">
	{{ Form::button('<i class="fa fa-save"></i><span>Salvar</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
</div>
{{ Form::close() }}