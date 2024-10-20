@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Create New Page</h1>
        
        <form action="{{ route('page.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="page_name" class="form-label">Page Name</label>
                <input type="text" class="form-control" id="page_name" name="page_name" placeholder="Enter page name" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" placeholder="Enter page content" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
            <a href="{{ route('page.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
