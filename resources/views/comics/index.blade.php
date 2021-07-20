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
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->type}}</td>
                    <td>show</td>
                    <td>edit</td>
                    <td>delet</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection