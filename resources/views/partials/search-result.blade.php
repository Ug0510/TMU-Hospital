<!-- resources/views/partials/search-results.blade.php -->

@if(count($results) > 0)
    @foreach($results as $result)
        <div class="dropdown-item">
            <a href="{{ url('details/' . $result->id) }}">{{ $result->name }}</a>
        </div>
    @endforeach
@else
    <div class="dropdown-item">No results found</div>
@endif
