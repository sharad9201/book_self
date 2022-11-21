{{-- home --}}
@extends('layouts.app')
@section('content')
    <a href="{{ route('books.index') }}" class="btn btn-primary">View Books</a>
    @if (auth()->user()->isAdmin())
        <a href="{{ route('books.create') }}" class="btn btn-primary">Add Books</a>
    @endif
@endsection
