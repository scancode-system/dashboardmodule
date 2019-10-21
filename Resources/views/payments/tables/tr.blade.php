<tr>
	<td class="align-middle">{{ 'Caroa de Crédito' }}</td>
	<td class="align-middle">@currency(1500)</td>
	<td class="align-middle">@percentage('34.54')</td>
	<td class="align-middle">@percentage('34.54')</td>
	<td class="text-right align-middle">
		<div class="btn-group" role="group" aria-label="Basic example">
			<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#payments_view_1"><i class="fa fa-eye"></i></button>
			<a href="{{ route('payments.edit', 1) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#payments_destroy_1"><i class="fa fa-trash-o"></i></button>
		</div>
	</td>
	@include('dashboard::payments.modals.modal_view_payments')
	@modal_destroy(['route_destroy' => 'payments.destroy', 'model' => 1, 'modal_id' => 'payments_destroy_1'])
</tr>