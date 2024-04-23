@extends('layouts.master')
@section('content')
    <div class="container">
        <form action="submit" method="POST">
            @csrf
            <div class="form-group">
              <label>Employee Name</label>
              <input type="text" class="form-control" name="empname" placeholder="Enter Employee's Name">
            </div>
            <div class="form-group">
              <label>Employee Address</label>
              <input type="text" class="form-control" name="empaddress" placeholder="Enter Employee's Address">
            </div>
            <div class="form-group">
              <label>Employee Phone</label>
              <input type="text" class="form-control" name="empphone" placeholder="Enter Employee's Phone">
            </div>
            <div class="form-group">
                <label>Salary</label>
                <input type="text" class="form-control" name="salary" placeholder="Enter Employee's Salary">
              </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
    </div>
@endsection