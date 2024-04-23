@extends('index')
@section('name')
    <div class="container">
        <h1>Book Issues List</h1>
        @foreach ($data as $item)
            {{$item->}}
        @endforeach
    </div>
@endsection