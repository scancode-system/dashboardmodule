@if(session()->has('events.edit'))
<div class="alert alert-success alert-dismissible fade show">
	{{ session()->get('events.edit') }}
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
			{{ Form::label('company_name', 'Evento') }}
			{{ Form::text('company_name', null, ['class' => 'form-control']) }}
		</div>
		<fieldset class="form-group">
			{{ Form::label('company_name', 'Data do Evento') }}
			<div class="input-group">
				<span class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-calendar"></i>
					</span>
				</span>
				<input class="form-control" name="daterange" type="text">
			</div>
		</fieldset>
		{{ Form::submit('Salvar', ['class' => 'btn btn-primary']) }}
	</div>
</div>


@push('styles')
{{ Html::style('modules/dashboard/coreui/vendors/bootstrap-daterangepicker/css/daterangepicker.min.css') }} 
@endpush


@push('scripts')
{{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js') }}
{{ Html::script('modules/dashboard/coreui/node_modules/bootstrap-daterangepicker/daterangepicker.js') }}


<script>
$('input[name="daterange"]').daterangepicker({
  opens: 'left',
  ranges: {
    Today: [moment(), moment()],
    Yesterday: [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
    'This Month': [moment().startOf('month'), moment().endOf('month')],
    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
  }
});

</script>

@endpush