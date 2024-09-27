@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Create a New Comic</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Thumb URL</label>
            <input type="text" class="form-control" id="thumb" name="thumb" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
        </div>
        <div class="form-group">
            <label for="series">Series</label>
            <input type="text" class="form-control" id="series" name="series" required>
        </div>
        <div class="form-group">
            <label for="sale_date">Sale Date</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" required>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>
        <button type="submit" class="btn btn-success btn-lg mt-3">Save</button>
    </form>
</div>
@endsection
