@extends('layouts.main')

@section('content')
    <h1>Comics here</h1>
    {{-- @dump($comics) --}}
  

    <table class="my-4 table table-striped border">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>price</th>
                <th>type</th>
                <th colsapn="3"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $item)
                <tr class="">
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->type}}</td>
                    <td><a href=" {{ route("comics.show", $item->id) }} " class="btn btn-info">SHOW</a></td>
                    <td><a href=" {{ route("comics.edit", $item->id) }} " class="btn btn-warning">EDIT</a></td>
                    <td>
                        <form action="{{ route("comics.destroy", $item->id) }}" method="POST" onsubmit="return confirm('Do you really want to delete the comic?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection