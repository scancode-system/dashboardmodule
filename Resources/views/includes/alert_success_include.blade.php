@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show">
	<strong>Sucesso! </strong>{!! session()->get('success') !!}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif



@if(session()->has('messages_warning'))
<div class="alert alert-warning alert-dismissible fade show">
	<ul class="mb-0">
		@foreach (session()->pull('messages_warning') as $warning)
		<li>{{ $warning }}</li>
		@endforeach
	</ul>
</div>
@endif