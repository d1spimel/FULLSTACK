@foreach ($filteredPages as $page)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href="{{ route('page.show', $page->id) }}">{{ $page->page_name }}</a>
        <div>
            <a href="{{ route('page.edit', $page->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('page.destroy', $page->id) }}" method="POST" class="d-inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </div>
    </li>
@endforeach
