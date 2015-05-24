@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">User</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $key => $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}

                    @include('users._form')

                    <p class="pull-left">
                        <button class="btn btn-primary" type="submit">Edit User</button>
                        <a href="{{ url('') }}" class="btn btn-danger" type="button">Batal</a>
                    </p>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
