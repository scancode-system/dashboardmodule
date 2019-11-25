@extends('dashboard::layouts.master')

@section('content')
@loader(['loader_path' => 'dashboard.dashboard'])
@endsection

@section('breadcrumb')
<li class="breadcrumb-item">
	Dashboard
</li>
@endsection
