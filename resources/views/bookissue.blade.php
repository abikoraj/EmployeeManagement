@extends('index')
@section('name')   
<div class="container">
    <h1>Issue Book</h1>
    <form action="submit-issue" method="POST">
        @csrf
        <div>
            <label for="">Student Name</label>
            <select name="student_id" id="">
                <option value=""></option>
                @foreach ($student as $item)
            <option value="{{$item['id']}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div>
            <label for="">Book Name</label>
            <select name="book_id" id="">
                <option value=""></option>
                @foreach ($book as $item)
            <option value="{{$item['id']}}">{{$item->name}}</option>       
                @endforeach
            </select>
        </div>
        <br>
        <button type="submit">Save</button>
    </form>
</div>
@endsection