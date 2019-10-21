@extends('dashboard::layouts.master')

@section('content')

<div class="card">
	<div class="card-header">
		<i class="fa fa-edit"></i> Clientes #{{ '1' }}
	</div>
	<div class="card-body">
		@include('dashboard::clients.forms.form')
	</div>
</div>

@endsection

@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ route('dashboard') }}">Dashboard</a>
</li>
<li class="breadcrumb-item">
	<a href="{{ route('clients.index') }}">Clientes</a>
</li>
<li class="breadcrumb-item">
	Editar Cliente
</li>
@endsection
