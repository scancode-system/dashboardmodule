<div class="row">
	<div class="col">
		{{ Form::model($company->company_info, ['route' => 'company_infos.update', 'method' => 'put']) }}
		<div class="form-group">
			{{ Form::label('cnpj', 'CNPJ') }}
			{{ Form::text('cnpj', null, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('corporate_name', 'Razão Social') }}
			{{ Form::text('corporate_name', null, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('fantasy_name', 'Nome Fantasia') }}
			{{ Form::text('fantasy_name', null, ['class' => 'form-control']) }}
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
	{{ Form::close() }}
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
		url: '{{ route("companies.updateLogo") }}',
		headers: {'X-CSRF-Token': "{{ csrf_token() }}"},
		dictDefaultMessage: 'Faça o upload da sua LOGO aqui',
		success: function(file, response, xhr){
            window.location.replace("{{ route('companies.edit', 0) }}");
        }
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
