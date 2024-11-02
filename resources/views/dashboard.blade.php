@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>
    <p>Welcome to your dashboard, {{ Auth::user()->name }}!</p>

    <!-- Кнопка выхода из системы -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Выход</button>
    </form>
@endsection
