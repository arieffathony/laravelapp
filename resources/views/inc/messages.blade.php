@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            <span class="glyphicon glyphicon-remove"></span>  {{$error}}
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success">
        <span class="glyphicon glyphicon-ok"></span>  {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        <span class="glyphicon glyphicon-remove"></span>  {{session('error')}}
    </div>
@endif