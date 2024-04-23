@extends('index')
@section('name')
    <div class="container">
        <h1>Add New Student</h1>
        <form action="submit-std" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Enter Student Name"> <br> <br>
            <input type="number" name="class" placeholder="Enter Student Class"> <br> <br>
            <input type="text" name="address" placeholder="Enter Student Address"> <br> <br>
            <input type="text" name="contact" placeholder="Enter Student Contact Number"> <br> <br>
            <button type="submit">Save</button>
        </form>
    </div>
@endsection