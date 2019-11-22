{{ Form::model($widget, ['route' => ['setting_dashboard.update.widget', $widget], 'method' => 'put']) }}
<div class="modal fade" id="{{ $modal_id }}" tabindex="-1" role="dialog" aria-labelledby="{{ $modal_id }}" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Editar Widget</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col">
						<div class="form-group"> 
							{{ Form::label('columns', 'Largura  do widget (1 -12)') }}
							{{ Form::number('columns', null, ['class' => 'form-control']) }}
						</div>
					</div>
					<div class="col">
						<div class="form-group"> 
							{{ Form::label('order', 'Prioridade') }}
							{{ Form::number('order', null, ['class' => 'form-control']) }}
						</div>
					</div>
				</div>
				<div class="form-group row">
					{{ Form::label('visible', 'Visível', ['class' => 'col-sm-2 col-form-label']) }}
					<div class="col-sm-10">
						<label class="switch switch-primary switch-lg mb-0 ml-3">
							{{ Form::hidden('visible', 0) }}
							{{ Form::checkbox('visible', 1, null,['class' => 'switch-input']) }}
							<span class="switch-slider"></span>
						</label>
					</div>
				</div>

			</div>
			<div class="modal-footer  justify-content-start">
				{{ Form::button('<i class="fa fa-save"></i><span>Salvar</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
			</div>
		</div>
	</div>
</div>

{{ Form::close() }}