@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Judul')}}
            {{Form::text('title', $post->title,['class' => 'form-control', 'placeholder' => 'Masukkan Judul Postingan disini', 'autocomplete' => 'off'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Isi Postingan')}}
            {{Form::textarea('body', $post->body,['id'=>'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Masukkan Isi Postingan disini'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
        <a href="/posts/{{$post->id}}" class="btn btn-default">Cancel</a>
    {!! Form::close() !!}
@endsection