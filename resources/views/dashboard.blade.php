@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>  Create Post</a>
                    <h3>Your Blog Post </h3>
                    @if (count($posts) > 0)
                    <table class="table table-hover">
                        <tr style="background-color: grey; color:white;">
                            <th>Title</thead>
                            <th>Action</th>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                            <th><a href="/posts/{{$post->id}}">{{$post->title}}</a></th>
                            <th>{!!Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'POST', 'class' => 'pull-left'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::button('<i class="glyphicon glyphicon-remove"></i>  Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                                {!!Form::close()!!}
                                <a href="/posts/{{$post->id}}/edit" class="btn btn-warning" style="margin-left: 10px"><span class="glyphicon glyphicon-wrench"></span>  Edit</a></th>
                        </tr>
                        @endforeach
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
