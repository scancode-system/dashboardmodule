@extends('dashboard::layouts.master')

@section('content')

<div class="card">
	<div class="card-header">
		<i class="fa fa-edit"></i> Representante #{{ '1' }}
	</div>
	<div class="card-body">
		@include('dashboard::representatives.forms.form')
	</div>
</div>

@endsection

@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ route('dashboard') }}">Dashboard</a>
</li>
<li class="breadcrumb-item">
	<a href="{{ route('representatives.index') }}">Representantes</a>
</li>
<li class="breadcrumb-item">
	Editar Representante
</li>
@endsection
