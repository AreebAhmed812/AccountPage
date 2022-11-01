@extends('layout')


@section('content')
<h1 style="width: 70%; margin: auto">List Page</h1>

<div class="container">
    <ul>
        @foreach($user as $users)
    <li> 
        <span style="width: 100px; display:inline-block">{{$users->name}}</span> 
        <span style="width: 100px; display:inline-block">{{$users->email}}</span>
    </li>
        @endforeach
    </ul>
</div>

@endsection