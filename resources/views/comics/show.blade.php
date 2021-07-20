@extends('layouts.main')

@section('content')
    {{-- @dump($comic) --}}

        <div class="row">
            <div class="col-sm-6 mt-5 d-flex justify-content-between">
                <a class="btn btn-secondary" href="{{route("comics.index")}}">Comic List</a>
                <div>
                    <a class="btn btn-warning" href="{{ $comic->id > 1 ? route('comics.show', $comic->id - 1) : '' }}">Prev</a>
                    {{-- <a class="btn btn-warning" href="{{ $comic->id > 1 ? route('comics.show', $comic->id - 1) : route('comics.show', $comic->id = 12) }}">Prev</a> --}}
    
                    
                    {{-- <a class="btn btn-success" href="{{ $comic->id < 12 ? route('comics.show', $comic->id + 1) : '' }}">Next</a> --}}
                    <a class="btn btn-success" href="{{ $comic->id < 12 ? route('comics.show', $comic->id + 1) : route('comics.show', $comic->id = 1) }}">Next</a>
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-sm-3">
                <div>
                    <img class="img-fluid" src=" {{ $comic->thumb }} " alt="{{ $comic->title }} ">
                    <p class="my-0"><strong>Publicated: </strong>{{$comic->sale_date}}</p>
                    <p><strong>Price: </strong>{{$comic->price}}</p>
                </div>
            </div>
            <div class="col-sm-6">
                <p><strong>Title: </strong>{{$comic->title}}</p>
                            
                <p><strong>Type: </strong>{{$comic->type}}</p>            
                <p><strong>Description: </strong></p>
                <p>{{$comic->description}}</p>            
            </div>
        </div>

@endsection