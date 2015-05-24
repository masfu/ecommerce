@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Detail</div>

                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>ID</td>
                            <td>{{ $user->id}}</td>
                        </tr>
                        <tr>
                            <td>NAME</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td>EMAIL</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    </table>
                    <a href="{{ url('users') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
