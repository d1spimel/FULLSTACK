@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Edit Page</h1>
        
        <form action="{{ route('page.update', $page->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="page_name" class="form-label">Page Name</label>
                <input type="text" class="form-control" id="page_name" name="page_name" value="{{ $page->page_name }}" required>
            </div>
            
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" required>{{ $page->content }}</textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('page.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
