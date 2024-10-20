@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>{{ $page->page_name }}</h1>
        <p>{{ $page->content }}</p>
        
        <a href="{{ route('page.edit', $page->id) }}" class="btn btn-warning">Edit</a>
    </div>
@endsection
