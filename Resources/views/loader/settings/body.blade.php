<div class="tab-pane {{ ($tab=='widgets')?'show active':'' }}" >
	@alert_errors()
	@alert_success()
	<table class="table table-responsive-sm bg-white table-hover border">
		@include('dashboard::loader.settings.tables.thead')
		<tbody>
			@each('dashboard::loader.settings.tables.tr', $widgets, 'widget')
		</tbody>
	</table>
	{{ $widgets->links() }}

</div> 