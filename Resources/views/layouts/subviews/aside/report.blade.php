@foreach($report_categories as $category => $reports)
<div class="list-group list-group-accent">
    <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">{{ $category }}</div>
    @foreach($reports as $report)
    <a href="{{ route('reports.download', $report) }}" class="list-group-item list-group-item-accent-dark list-group-item-divider list-group-item-action">{{ $report->alias }}</a>
    @endforeach
</div>
@endforeach