@extends('layouts.app')

@section('content')
<h1>Create a New Comic</h1>

<form action="{{ route('comics.store') }}" method="POST">
    @csrf
    <label>Title:</label>
    <input type="text" name="title" required>
    <label>Description:</label>
    <textarea name="description" required></textarea>
    <label>Thumb URL:</label>
    <input type="text" name="thumb" required>
    <label>Price:</label>
    <input type="text" name="price" required>
    <label>Series:</label>
    <input type="text" name="series" required>
    <label>Sale Date:</label>
    <input type="date" name="sale_date" required>
    <label>Type:</label>
    <input type="text" name="type" required>
    <button type="submit">Save</button>
</form>
@endsection
