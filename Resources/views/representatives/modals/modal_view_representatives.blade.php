@modal_view(['modal_id' => 'representatives_view_1', 'edit_route' => 'representatives.edit', 'model_id' => '2'])

@slot('title')
Representante #{{ '1' }}
@endslot

<div class="row justify-content-center mb-1">
	<div class="col-md-4"><strong>Nome: </strong></div>
	<div class="col-md-4">{{ 'João da Silva' }}</div>
</div>
<div class="row justify-content-center mb-1">
	<div class="col-md-4"><strong>Email: </strong></div>
	<div class="col-md-4">{{ 'joao@gmail.com' }}</div>
</div>
<div class="row justify-content-center mb-1">
	<div class="col-md-4"><strong>Telefone: </strong></div>
	<div class="col-md-4">{{ '(31)33333333' }}</div>
</div>

@endmodal_view