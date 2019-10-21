@alert_errors()
@if(isset($representative))
{{ Form::open($representative, ['route' => ['representatives.update', $representative], 'method' => 'put']) }}
@else
{{ Form::open(['route' => 'representatives.store']) }}
@endif
<div class="form-group">
	{{ Form::label('name', 'Nome') }}
	{{ Form::text('name', old('name'), ['class' => 'form-control']) }}
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
<div class="form-group">
	{{ Form::label('password', 'Senha') }}
	{{ Form::text('password', old('password'), ['class' => 'form-control']) }}
</div>
<div class="form-group  mb-0">
	{{ Form::button('<i class="fa fa-save"></i><span>Salvar</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
</div>
{{ Form::close() }}
