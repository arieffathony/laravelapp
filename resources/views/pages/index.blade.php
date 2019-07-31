@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>this is my first web using laravel !</p>
    <p><a class="btn btn-primary btn-lg" href="/login" role="login"><span class="glyphicon glyphicon-user"></span> LOGIN</a> <a href="/register" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-folder-open"></span>   REGISTER</a></p>
</div>
@endsection
        