<div class="row">
	<div class="col">
		{{ Form::model($company, ['route' => 'company.update', 'method' => 'put']) }}
		<div class="form-group">
			{{ Form::label('name', 'Login') }}
			{{ Form::text('name', null, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('password', 'Senha') }}
			{{ Form::password('password', ['class' => 'form-control']) }}
		</div>
		{{ Form::submit('Salvar', ['class' => 'btn btn-primary']) }}
	</div>
	{{ Form::close() }}
</div>
