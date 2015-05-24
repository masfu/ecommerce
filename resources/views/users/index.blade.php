@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Categories</div>
                <div class="panel-body">
                    @if (Session::has('message'))
                    <div class="alert alert-success">
                        <p>{{ Session::get('message') }}</p>
                    </div>
                    @endif	
                    <a href="{{ url('users/create') }}" class="btn btn-primary">Buat Users</a>
                    <hr>
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                        </tr>
                        @foreach ($users as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>
                                <a href="{{ route('users.show', $row->id) }}"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="{{ route('users.edit', $row->id) }}"><span class="glyphicon glyphicon-pencil"></span></a>
                                <a href="{{ route('users.destroy', $row->id) }}" data-method="delete" data-confirm="Are you sure delete this users?" rel="nofollow" data-remote><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {!!  $users->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
