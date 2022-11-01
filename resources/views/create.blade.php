@extends('layout')
@section('content')
<h1 style="width: 70%; margin: auto">Account Page</h1>
<div class="container">
    <form action="/createsubmit" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name" id="name"><br>
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="text" class="form-control" name="email" placeholder="Enter email" id="email"><br>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Enter password" id="pwd"><br>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection