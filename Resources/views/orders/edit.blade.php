@extends('dashboard::layouts.master')

@section('content')
<div class="card">
	<div class="card-header">
		<nav>
			<div class="nav nav-tabs" role="tablist">
				<a class="nav-item nav-link {{ ($tab==0)?'active':'' }}" href="{{ route('orders.edit', [1, 0]) }}" >Itens</a>
				<a class="nav-item nav-link {{ ($tab==1)?'active':'' }}" href="{{ route('orders.edit', [1, 1]) }}">Cliente</a>
				<a class="nav-item nav-link {{ ($tab==2)?'active':'' }}" href="{{ route('orders.edit', [1, 2]) }}">Representante</a>
				<a class="nav-item nav-link {{ ($tab==3)?'active':'' }}" href="{{ route('orders.edit', [1, 3]) }}">Pagamento</a>
				<a class="nav-item nav-link {{ ($tab==4)?'active':'' }}" href="{{ route('orders.edit', [1, 4]) }}">Observação</a>
			</div>
		</nav>
	</div>
	<div class="card-body">
		<div class="tab-content">
			<div class="tab-pane {{ ($tab==0)?'show active':'' }}" >
				@include('dashboard::orders.tabs.items')
			</div>
			<div class="tab-pane {{ ($tab==1)?'show active':'' }}">
				@include('dashboard::orders.tabs.client')
			</div>
			<div class="tab-pane {{ ($tab==2)?'show active':'' }}">
				@include('dashboard::orders.tabs.representative')
			</div>
			<div class="tab-pane {{ ($tab==3)?'show active':'' }}">
				@include('dashboard::orders.tabs.payment')
			</div>
			<div class="tab-pane {{ ($tab==4)?'show active':'' }}">
				@include('dashboard::orders.tabs.observation')
			</div>
		</div>
	</div>
</div>



@endsection

@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ route('dashboard') }}">Dashboard</a>
</li>
<li class="breadcrumb-item">
	<a href="{{ route('orders.index') }}">Pedidos</a>
</li>
<li class="breadcrumb-item">
	Pedido
</li>
@endsection
