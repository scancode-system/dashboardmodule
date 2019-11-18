@extends('dashboard::layouts.master')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<nav>
					<div class="nav nav-tabs" role="tablist">
						@loader(['loader_path' => 'settings.nav'])
					</div>
				</nav>
			</div>
			<div class="card-body">
				<div class="tab-content">
					@loader(['loader_path' => 'settings.body'])
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
