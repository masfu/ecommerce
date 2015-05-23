@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Categories</div>
				<div class="panel-body">
					{!! Form::model($category, ['route' => ['categories.store']]) !!}
                    
					@include('categories._form')
					
					<p class="pull-left">
							<button class="btn btn-primary" type="submit">Buat Kategori</button>
							<a href="{{ url('') }}" class="btn btn-danger" type="button">Batal</a>
						</p>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
