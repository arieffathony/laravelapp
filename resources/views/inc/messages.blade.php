@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success">
        <span class="glyphicon glyphicon-ok">{{session('success')}}</span>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        <span class="glyphicon glyphicon-remove">{{session('error')}}</span>
    </div>
@endif