@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Judul')}}
            {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Masukkan Judul Postingan disini', 'autocomplete' => 'off'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Isi Postingan')}}
            {{Form::textarea('body','',['id'=>'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Masukkan Isi Postingan disini'])}}
        </div>
        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
        <a href="/posts" class="btn btn-default">Cancel</a>
    {!! Form::close() !!}
@endsection