@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ $comic->thumb }}" class="img-fluid" alt="{{ $comic->title }}">
        </div>
        <div class="col-md-8">
            <h1>{{ $comic->title }}</h1>
            <p>{{ $comic->description }}</p>
            <p><strong>Price:</strong> {{ $comic->price }} €</p>
            <p><strong>Series:</strong> {{ $comic->series }}</p>
            <p><strong>Sale Date:</strong> {{ $comic->sale_date }}</p>
        </div>
    </div>
</div>
@endsection
