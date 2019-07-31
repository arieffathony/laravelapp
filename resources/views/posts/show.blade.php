@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        <p>{!!$post->body!!}</p>
    </div>
    <hr>
    <small>Written On : {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>
@endsection