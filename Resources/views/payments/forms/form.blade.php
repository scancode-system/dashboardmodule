@alert_errors()
@if(isset($payment))
{{ Form::open($payment, ['route' => ['payments.update', $payment], 'method' => 'put']) }}
@else
{{ Form::open(['route' => 'payments.store']) }}
@endif
<div class="form-group">
	{{ Form::label('description', 'Descrição') }}
	{{ Form::text('description', old('description'), ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('min_value', 'Valor Mínimo') }}
	{{ Form::number('min_value', old('min_value'), ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('descount', 'Desconto') }}
	{{ Form::number('descount', old('descount'), ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('addition', 'Acréscimo') }}
	{{ Form::number('addition', old('addition'), ['class' => 'form-control']) }}
</div>
<div class="form-group  mb-0">
	{{ Form::button('<i class="fa fa-save"></i><span>Salvar</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
</div>
{{ Form::close() }}