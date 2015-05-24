@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
                                    @foreach($product as $row)
                                    <div class="panel panel-default">
                                        <div class="panel-heading">{{ $row->title }}</div>
                                        <div class="panel-body">
                                            <img class="pull-left" src="{{ $row->thumbImage() }}">
                                            <p class="pull-left">{{ $row->description }}</p>
                                        </div>
                                    </div>
                                    @endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
