@extends('layouts.app')

@section('content')
<div class="jumbotron text-center" style="background-image:url(https://img.freepik.com/free-photo/tropical-green-leaves-background_53876-88891.jpg?size=626&ext=jpg); background-size: cover;">
    <h1 style="color:white">{{$title}}</h1>
    <p style="color:white">this is my first web using laravel !</p>
    <p><a class="btn btn-primary btn-lg" href="/login" role="login"><span class="glyphicon glyphicon-user"></span> LOGIN</a> <a href="/register" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-folder-open"></span>   REGISTER</a></p>
</div>
@endsection
        