@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Comics List</h1>
    <ul class="list-group">
        @foreach ($comics as $comic)
            <li class="list-group-item">
                <a href="{{ route('comics.show', $comic->id) }}" class="text-decoration-none">
                    {{ $comic->title }} - {{ $comic->price }} €
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
