@extends('dashboard::layouts.master')

@section('content')

@endsection

@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ route('dashboard') }}">Dashboard</a>
</li>
<li class="breadcrumb-item">
	Pedidos
</li>
@endsection
