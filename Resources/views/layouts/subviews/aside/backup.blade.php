@alert_errors()
@alert_success()
<h6>Backup</h6>
<div class="aside-options">
                <!--<div class="clearfix mt-4">
                    <small>
                        <b>Remoto</b>
                    </small>
                    <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                        <input class="switch-input" type="checkbox" >
                        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                    </label>
                </div>
                <div>
                    <small class="text-muted">È necessário conexão com a internet para o backup remoto.</small>
                </div>-->
                {{ Form::model($backup, ['route' => 'backup.update', 'method' => 'put']) }}
                <div class="my-3">
                    <small class="text-muted">Caso queira que o backup seja exportado em alguma pasta espcífica, além do Download. preencha a caixa de texto.</small>
                </div>
                {{ Form::text('destiny', null, ['class' => 'form-control', 'placeholder' => 'Destino']) }}
                <button class="btn btn-primary mt-2 w-100">Exportar</button>
                {{ Form::close() }}
            </div>
            <!--<div class="aside-options">
                <div class="clearfix mt-4">
                    <h6>Automático</h6>
                    {{ Form::select('backup_auto', ['0' => 'Desabilitado', '10' => '10 em 10 minutos', '30' => '30 em 30 minutos', '60' => 'de hora em hora', '180' => '3 em 3 horas'], null, ['class' => 'form-control']) }}
                </div>
            </div>-->