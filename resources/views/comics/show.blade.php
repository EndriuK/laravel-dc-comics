@extends('layouts.app')

@section('content')
<h1>{{ $comic->title }}</h1>
<p>{{ $comic->description }}</p>
<img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
<p>Price: {{ $comic->price }} €</p>
<p>Series: {{ $comic->series }}</p>
<p>Sale Date: {{ $comic->sale_date }}</p>
@endsection
