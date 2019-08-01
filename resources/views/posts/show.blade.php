@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default"><span class="glyphicon glyphicon-th-large"></span>&nbsp; See All Post</a>
    @guest
    @else
    <a href="/dashboard" class="btn btn-primary"><span class="glyphicon glyphicon-home"></span>&nbsp; Dashboard</a>
    @endguest
    <h1>{{$post->title}}</h1>
    <div>
        <p>{!!$post->body!!}</p>
    </div>
    <hr>
    <small>Written On : {{$post->created_at}}</small>
    <hr>
    @guest
    @else
    @if (Auth::user()->id == $post->user_id)
    {!!Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'POST', 'class' => 'pull-left'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::button('<i class="glyphicon glyphicon-remove"></i>  Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
    {!!Form::close()!!}
    <a href="/posts/{{$post->id}}/edit" class="btn btn-warning" style="margin-left: 10px"><span class="glyphicon glyphicon-wrench"></span>  Edit</a>
    @endif
    @endguest
@endsection