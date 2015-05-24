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
                    <a href="{{ url('categories/create') }}" class="btn btn-primary">Buat Category</a>
                    <hr>
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th></th>
                        </tr>
                        @foreach($category as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->name }}</td>
                            <td>
                                <a href="{{ route('categories.show', $row->id) }}">
									<span class="glyphicon glyphicon-eye-open"></span>
								</a>
                                <a href="{{ route('categories.edit', $row->id) }}">
									<span class="glyphicon glyphicon-pencil"></span>
								</a>
                                <a href="{{ route('categories.destroy', $row->id) }}" 
									data-method="delete" data-confirm="Are you sure delete this categori?"
									rel="nofollow" data-remote>
									<span class="glyphicon glyphicon-trash"></span>
								</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {!!  $category->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
