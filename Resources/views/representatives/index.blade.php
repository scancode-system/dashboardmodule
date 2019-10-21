@extends('dashboard::layouts.master')

@section('content')

<div class="card">
	@header_search_add(['search' => 'Pesquisar', 'route_search' => 'representatives.index', 'route_add' => 'representatives.create'])
	<div class="card-body">
		@alert_success()
		<table class="table table-responsive-sm bg-white table-hover border">
			@include('dashboard::representatives.tables.thead')
			<tbody>
				@include('dashboard::representatives.tables.tr')
				@include('dashboard::representatives.tables.tr')
				@include('dashboard::representatives.tables.tr')
				@include('dashboard::representatives.tables.tr')
				@include('dashboard::representatives.tables.tr')
			</tbody>
		</table>
		<ul class="pagination mb-0">
			<li class="page-item">
				<a class="page-link" href="#">Anterior</a>
			</li>
			<li class="page-item active">
				<a class="page-link" href="#">1</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">2</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">3</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">4</a>
			</li>
			<li class="page-item">
				<a class="page-link" href="#">Proximo</a>
			</li>
		</ul>

	</div>
</div>

@endsection

@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ route('dashboard') }}">Dashboard</a>
</li>
<li class="breadcrumb-item">
	Representantes
</li>
@endsection
