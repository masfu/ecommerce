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
                            <td>{{ $product->id}}</td>
                        </tr>
                        <tr>
                            <td>TITLE</td>
                            <td>{{ $product->name }}</td>
                        </tr>
                        <tr>
                            <td>DESCRIPTION</td>
                            <td>{{ $product->description }}</td>
                        </tr>
                        <tr>
                            <td>PRICE</td>
                            <td>{{ $product->price }}</td>
                        </tr>
                        <tr>
                            <td>QUANTITY</td>
                            <td>{{ $product->quantity }}</td>
                        </tr>
                        <tr>
                            <td>CATEGORY</td>
                            <td>{{ $product->category->name }}</td>
                        </tr>
                        <tr>
                            <td>USER</td>
                            <td>{{ $product->user->name }}</td>
                        </tr>
                        <tr>
                            <td>IMAGE</td>
                            <td><img src="{{ url( $product->imageUrl()) }}"></td>
                        </tr>
                    </table>
                    <a href="{{ url('users') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
