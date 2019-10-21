@modal_view(['modal_id' => 'payments_view_1', 'edit_route' => 'payments.edit', 'model_id' => '2'])

@slot('title')
Pagamento #{{ '1' }}
@endslot

<div class="row justify-content-center mb-1">
	<div class="col-md-5"><strong>Descrição: </strong></div>
	<div class="col-md-5">{{ 'CAC055' }}</div>
</div>
<div class="row justify-content-center mb-1">
	<div class="col-md-5"><strong>Valor Mínimo: </strong></div>
	<div class="col-md-5">@currency(1500)</div>
</div>
<div class="row justify-content-center mb-1">
	<div class="col-md-5"><strong>Desconto: </strong></div>
	<div class="col-md-5">@percentage('34.54')</div>
</div>
<div class="row justify-content-center mb-1">
	<div class="col-md-5"><strong>Acréscimo: </strong></div>
	<div class="col-md-5">@percentage('34.54')</div>
</div>

@endmodal_view