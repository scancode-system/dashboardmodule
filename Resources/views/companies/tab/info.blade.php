@if(session()->has('companies.edit'))
<div class="alert alert-success alert-dismissible fade show">
	{{ session()->get('companies.edit') }}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
	<ul class="mb-0">
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div class="row">
	<div class="col">
		<div class="form-group">
			{{ Form::label('cnpj', 'CNPJ') }}
			{{ Form::text('cnpj', null, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('company_name', 'Razão Social') }}
			{{ Form::text('company_name', null, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('trade_name', 'Nome Fantasia') }}
			{{ Form::text('trade_name', null, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('state_registration', 'Inscrição Estadual') }}
			{{ Form::text('state_registration', null, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('phone', 'Telefone') }}
			{{ Form::text('phone', null, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('email', 'Email') }}
			{{ Form::email('email', null, ['class' => 'form-control']) }}
		</div>
		{{ Form::submit('Salvar', ['class' => 'btn btn-primary']) }}
	</div>
	<div class="col">
		<div id="dz-logo" class="dropzone h-100"></div>
	</div>
</div>


@push('styles')
{{ Html::style('modules/dashboard/dropzone/dropzone.css') }}
@endpush


@push('scripts')
{{ Html::script('modules/dashboard/dropzone/dropzone.js') }}


<script>
	Dropzone.autoDiscover = false;

	var dz_logo = new Dropzone('#dz-logo', {
		url: '{{ route("companies.upload") }}',
		headers: {'X-CSRF-Token': "{{ csrf_token() }}"},
		dictDefaultMessage: 'Faça o upload da sua LOGO aqui'
	});

	@if(false)
	let mockFile = { name: "Arquivo Salvo", dataURL: "{{ route('companies.logo') }}" };
	dz_logo.files.push(mockFile);
	dz_logo.emit("addedfile", mockFile);
	dz_logo.createThumbnailFromUrl(mockFile,
		dz_logo.options.thumbnailWidth, 
		dz_logo.options.thumbnailHeight,
		dz_logo.options.thumbnailMethod, true, function (thumbnail) 
		{
			dz_logo.emit('thumbnail', mockFile, thumbnail);
		});
	dz_logo.emit('complete', mockFile);
	@endif

</script>

@endpush
