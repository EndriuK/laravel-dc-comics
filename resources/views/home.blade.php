@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <h1 class="display-4">Welcome to the Comics App</h1>
    <div class="mt-4">
        <a href="{{ route('comics.index') }}" class="btn btn-primary btn-lg mx-2">View all Comics</a>
        <a href="{{ route('comics.create') }}" class="btn btn-success btn-lg mx-2">Create a New Comic</a>
    </div>
</div>
@endsection
