@extends('layouts.main')

@section('content')
    {{-- @dump($comic) --}}

        <div class="row">
            <div class="col-sm-2 mt-5 ">
                <a class="btn btn-secondary" href="{{route("comics.index")}}">Back</a>
                <a class="btn btn-primary" href="{{route("comics.show", $comic->id +1)}}">Next</a>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-sm-3">
                <div>
                    <img src=" {{ $comic->thumb }} " alt="{{ $comic->title }} ">
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