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
    {!!Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'POST', 'class' => 'pull-left'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    <a href="/posts/{{$post->id}}/edit" class="btn btn-warning" style="margin-left: 10px">Edit</a>
@endsection