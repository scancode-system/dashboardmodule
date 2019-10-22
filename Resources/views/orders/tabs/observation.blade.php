{{ Form::open(['route' => ['orders.update', 1], 'method' => 'put']) }}
<div class="form-group">
	{{ Form::textarea('observation', null, ['class' => 'form-control', 'placeholder' => 'Obervações do pedido']) }}
</div>
<hr>
{{ Form::close() }}
