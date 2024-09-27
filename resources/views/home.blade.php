@extends('layouts.app')

@section('content')
    <h1>Welcome to the Comics App</h1>
    <p><a href="{{ route('comics.index') }}">View all Comics</a></p>
    <p><a href="{{ route('comics.create') }}">Create a New Comic</a></p>
@endsection