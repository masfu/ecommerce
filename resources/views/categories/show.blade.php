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
                            <td>{{ $category->id }}</td>
                        </tr>
                        <tr>
                            <td>NAME</td>
                            <td>{{ $category->name }}</td>
                        </tr>
                    </table>
                    <a href="{{ url('categories') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
