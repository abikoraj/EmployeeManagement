@extends('index')
@section('name')
<div class="container">
<h1>Add New Book</h1>
<form action="submit-book" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter Book Name"> <br> <br>
    <input type="text" name="author" placeholder="Enter Book Author"> <br> <br>
    <input type="text" name="isbn" placeholder="Enter Book ISBN"> <br> <br>
    <button type="submit">Save</button>
</form>
</div> 
@endsection