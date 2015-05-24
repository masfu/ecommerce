@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>
                <div class="panel-body">
                    @if (Session::has('message'))
                    <div class="alert alert-success">
                        <p>{{ Session::get('message') }}</p>
                    </div>
                    @endif	
                    <a href="{{ url('products/create') }}" class="btn btn-primary">Buat Products</a>
                    <hr>
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>TITLE</th>
                            <th>DESCRIPTION</th>
                            <th>PRICE</th>
                            <th>QUANTITY</th>
                            <th>CATEGORY</th>
                            <th>CREATED BY</th>
                        </tr>
                        @foreach ($products as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->title }}</td>
                            <td>{{ $row->description }}</td>
                            <td>{{ $row->price }}</td>
                            <td>{{ $row->quantity }}</td>
                            <td>{{ $row->category->name }}</td>
                            <td>{{ $row->user->name }}</td>
                            <td>
                                <a href="{{ route('products.show', $row->id) }}"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="{{ route('products.edit', $row->id) }}"><span class="glyphicon glyphicon-pencil"></span></a>
                                <a href="{{ route('products.destroy', $row->id) }}" data-method="delete" data-confirm="Are you sure delete this products?" rel="nofollow" data-remote><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {!!  $products->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
