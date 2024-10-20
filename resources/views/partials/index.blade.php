@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Page List</h1>
        
        <!-- Filter Form -->
        <form id="filter-form" class="mb-3" method="GET" action="{{ route('page.index') }}">
            <input type="text" name="keyword" id="keyword" placeholder="Search by page name" class="form-control" value="{{ request('keyword') }}">
            <button type="submit" class="btn btn-primary mt-2">Filter</button>
        </form>

        <a href="{{ route('page.create') }}" class="btn btn-success mb-3">Create New Page</a>
        
        <div id="filtered-results">
            <ul class="list-group">
                @foreach ($pages as $page)
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
            </ul>
        </div>
    </div>
@endsection
