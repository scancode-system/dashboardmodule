@alert_errors()
@alert_success()
<h6>Backup</h6>
<div class="aside-options">
    {{ Form::model($backup, ['route' => 'backup.update', 'method' => 'put']) }}
    <div class="my-3">
        <small class="text-muted">Caso queira que o backup seja exportado em alguma pasta espcífica, além do Download. preencha a caixa de texto.</small>
    </div>
    {{ Form::text('destiny', null, ['class' => 'form-control', 'placeholder' => 'Destino']) }}
    <button class="btn btn-primary mt-2 w-100">Exportar</button>
    {{ Form::close() }}
</div>
<hr>
<h6>Portal</h6>
{{ Form::open(['route' => 'portal.update', 'method' => 'get']) }}
{{ Form::button('Atualizar', ['class' => 'btn btn-danger mt-2 w-100', 'type' => 'submit']) }}
{{ Form::close() }}