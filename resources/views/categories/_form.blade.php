<div class="form-group form-group-label">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            {!! Form::label('name', 'Name', ['class' => '']) !!}
            {!! Form::text('name',Input::old('name'), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>