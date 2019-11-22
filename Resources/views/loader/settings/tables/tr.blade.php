<tr>
	<td>
		{{ $widget->name }}
	</td>
	<td class="text-center">
		<span class="badge badge-{{ ($widget->visible)?'success':'danger' }} badge-pill py-1 px-4">{{ ($widget->visible)?'Sim':'Não' }}</span>
	</td>
	<td class="text-center">
		{{ $widget->columns }} Colunas
	</td>
	<td class="text-right">
			<a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#widgets_edit_{{ $widget->id }}"><i class="fa fa-edit"></i></a>
	</td>
	@include('dashboard::loader.settings.modals.widgets_edit', ['modal_id' => 'widgets_edit_'.$widget->id])
</tr>