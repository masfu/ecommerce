<div class="form-group form-group-label">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            {!! Form::label('title', 'Title', ['class' => '']) !!}
            {!! Form::text('title',Input::old('title'), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group form-group-label">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            {!! Form::label('description', 'Description', ['class' => '']) !!}
            {!! Form::textarea('description',Input::old('description'), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group form-group-label">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            {!! Form::label('price', 'price', ['class' => '']) !!}
            {!! Form::text('price', Input::old('price'),['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group form-group-label">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            {!! Form::label('quantity', 'Quantity', ['class' => '']) !!}
            {!! Form::text('quantity',Input::old('quantity'),  ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group form-group-label">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            {!! Form::label('Category', 'Category', ['class' => '']) !!}
            {!! Form::select('category_id', App\Models\Category::lists('name', 'id'), Input::old('category_id'), ['class' => 'form-control chosen-select']) !!}
        </div>
    </div>
</div>
<div class="form-group form-group-label">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            {!! Form::label('image', 'Image', ['class' => '']) !!}
            {!! Form::file('image', ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
{!! Form::hidden('user_id',  Auth::user()->id) !!}