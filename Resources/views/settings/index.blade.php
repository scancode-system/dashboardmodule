@extends('dashboard::layouts.master')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<nav>
					<div class="nav nav-tabs" role="tablist">
						<a class="nav-item nav-link {{ ($tab=='events')?'active':'' }}" href="{{ route('settings.index', 'events') }}" >Eventos</a>
						<a class="nav-item nav-link {{ ($tab=='requests')?'active':'' }}" href="{{ route('settings.index', 'requests') }}" >Pedidos</a>
						<a class="nav-item nav-link {{ ($tab=='clients')?'active':'' }}" href="{{ route('settings.index', 'clients') }}">Clientes</a>
						<a class="nav-item nav-link {{ ($tab=='prints')?'active':'' }}" href="{{ route('settings.index', 'prints') }}">Impressão</a>
					</div>
				</nav>
			</div>
			<div class="card-body">
				<div class="tab-content">
					<div class="tab-pane {{ ($tab=='events')?'show active':'' }}" >
						@include('dashboard::settings.tab.events.events')
					</div>
					<div class="tab-pane {{ ($tab=='requests')?'show active':'' }}" >
						@include('dashboard::settings.tab.requests.requests')
					</div>
					<div class="tab-pane {{ ($tab=='clients')?'show active':'' }}" >
						@include('dashboard::settings.tab.clients.clients')
					</div>
					<div class="tab-pane {{ ($tab=='prints')?'show active':'' }}" >
						@include('dashboard::settings.tab.prints.prints')
					</div>
				</div>
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
	Configurações do Sistema
</li>
@endsection
