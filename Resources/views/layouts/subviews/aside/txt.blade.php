@foreach($txts as $txt)
<a href="{{ route('txt.download', $txt) }}" class="list-group-item list-group-item-accent-dark list-group-item-divider list-group-item-action">{{ $txt->alias }}</a>
@endforeach
