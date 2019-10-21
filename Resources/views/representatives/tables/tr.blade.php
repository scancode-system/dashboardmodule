<tr>
	<td class="align-middle">{{ 'João da Silva' }}</td>
	<td class="align-middle">{{ 'joã@gmail.com' }}</td>
	<td class="align-middle">{{ '(31) 33335555' }}</td>
	<td class="text-right align-middle">
		<div class="btn-group" role="group" aria-label="Basic example">
			<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#representatives_view_1"><i class="fa fa-eye"></i></button>
			<a href="{{ route('representatives.edit', 1) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#representatives_destroy_1"><i class="fa fa-trash-o"></i></button>
		</div>
	</td>
	@include('dashboard::representatives.modals.modal_view_representatives')
	@modal_destroy(['route_destroy' => 'representatives.destroy', 'model' => 1, 'modal_id' => 'representatives_destroy_1'])
</tr>