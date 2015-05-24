<div class="form-group form-group-label">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            {!! Form::label('name', 'Name', ['class' => '']) !!}
            {!! Form::text('name',Input::old('name'), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group form-group-label">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            {!! Form::label('email', 'Email', ['class' => '']) !!}
            {!! Form::text('email',Input::old('email'), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group form-group-label">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            {!! Form::label('password', 'Password', ['class' => '']) !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group form-group-label">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            {!! Form::label('password_confirmation', 'Confirm Password', ['class' => '']) !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        </div>
    </div>
</div>