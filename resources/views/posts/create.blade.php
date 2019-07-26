@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Judul')}}
            {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Masukkan Judul Postingan disini'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Isi Postingan')}}
            {{Form::textarea('body','',['class' => 'form-control', 'placeholder' => 'Masukkan Isi Postingan disini'])}}
        </div>
        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection