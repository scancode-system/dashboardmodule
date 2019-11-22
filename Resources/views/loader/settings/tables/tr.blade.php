<tr>
	<td>
		{{ $widget->name }}
	</td>
	<td>
		{{ ($widget->visible)?'Sim':'Não' }}
	</td>
	<td>
		{{ $widget->columns }} Colunas
	</td>
	<td class="text-right">
			<a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#widgets_edit_{{ $widget->id }}"><i class="fa fa-eye"></i></a>
	</td>
	@include('dashboard::loader.settings.modals.widgets_edit')
</tr>