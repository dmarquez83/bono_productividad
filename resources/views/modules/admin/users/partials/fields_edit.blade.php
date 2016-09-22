<div class="form-group">
    {!! Form::label('username', trans('form.label.username')) !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-tag "></i>
        </span>
        {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su '.trans('form.label.username')]) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('password', trans('form.label.password')) !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-lock font-red"></i>
        </span>
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '********']) !!}
    </div>
</div>
