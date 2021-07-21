@extends('layouts.main')

@section('content')
    <h1 class="my-2">Add new comic</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Comic title">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" class="form-control" id="series" placeholder="Comic serie">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" class="form-control" id="type" placeholder="Comic type">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" step="0.1" class="form-control" id="price" placeholder="Comic price">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="date" name="sale_date" class="form-control" id="sale_date" >
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" name="thumb" class="form-control" id="thumb" >
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" class="form-control" rows="4" cols="50" name="description" placeholder="enter description here"></textarea>
        </div>

        <input type="submit" value="Crea">
    </form>
@endsection
