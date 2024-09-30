

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Comics List</h1>
    <ul class="list-group">
        @foreach ($comics as $comic)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('comics.show', $comic->id) }}" class="text-decoration-none">
                    {{ $comic->title }} - {{ $comic->price }} €
                </a>
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" onsubmit="return confirmDelete()">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>

<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this comic?');
    }
</script>
@endsection
