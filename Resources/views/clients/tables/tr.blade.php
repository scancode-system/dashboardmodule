<tr>
	<td class="align-middle">{{ 'Minas Computadores' }}</td>
	<td class="align-middle">{{ '07995596600' }}</td>
	<td class="align-middle">{{ 'Leonardo BAV' }}</td>
	<td class="align-middle">{{ 'leonardoborges@gmail.com' }}</td>
	<td class="align-middle">{{ '(31) 333322223' }}</td>
	<td class="align-middle">{{ 'MG' }}</td>

	<td class="text-right align-middle">
		<div class="btn-group" role="group" aria-label="Basic example">
			<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#clients_view_1"><i class="fa fa-eye"></i></button>
			<a href="{{ route('clients.edit', 1) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#clients_destroy_1"><i class="fa fa-trash-o"></i></button>
		</div>
	</td>
	@include('dashboard::clients.modals.modal_view_clients')
	@modal_destroy(['route_destroy' => 'clients.destroy', 'model' => 1, 'modal_id' => 'clients_destroy_1'])
</tr>