@extends('dashboard::layouts.master')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<nav>
					<div class="nav nav-tabs" role="tablist">
						<a class="nav-item nav-link {{ ($tab==0)?'active':'' }}" href="{{ route('companies.edit', 0) }}" >Dados da Empresa</a>
						<a class="nav-item nav-link {{ ($tab==1)?'active':'' }}" href="{{ route('companies.edit', 1) }}">Endereço</a>
					</div>
				</nav>
			</div>
			<div class="card-body">
				<div class="tab-content">
					<div class="tab-pane {{ ($tab==0)?'show active':'' }}" >
						@include('dashboard::companies.tab.info')
					</div>
					<div class="tab-pane {{ ($tab==1)?'show active':'' }}">
						@include('dashboard::companies.tab.address')
					</div>
					<div class="tab-pane {{ ($tab==2)?'show active':'' }}">
						
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
	Empresa
</li>
@endsection
