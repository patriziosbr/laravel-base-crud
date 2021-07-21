@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="my-2">Form for edit a comic</h1>
        <a class="btn btn-secondary" href="{{ route('comics.show', $comic->id) }}">back to Comic</a>
    </div>

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Comic title" value="{{ $comic->title }}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" class="form-control" id="series" placeholder="Comic serie" value="{{ $comic->series }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" class="form-control" id="type" placeholder="Comic type" value="{{ $comic->type }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" step="0.1" class="form-control" id="price" placeholder="Comic price" value="{{ $comic->price }}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="date" name="sale_date" class="form-control" id="sale_date" value="{{ $comic->sale_date }}">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" name="thumb" class="form-control" id="thumb" value="{{ $comic->thumb }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" class="form-control" rows="4" cols="50" name="description" placeholder="enter description here">{{ $comic->description }}</textarea>
        </div>

        <input type="submit" value="Done">
    </form>
@endsection