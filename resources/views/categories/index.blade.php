@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Categories</div>
				<div class="panel-body">
					<table class="table">
						<tr>
							<th>ID</th>
							<th>NAME</th>
						</tr>
						@foreach($category as $row)
							<tr>
								<th>{{ $row->id }}</th>
								<th>{{ $row->name }}</th>
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
