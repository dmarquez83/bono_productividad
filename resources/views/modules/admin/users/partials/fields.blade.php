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
    {!! Form::label('name', trans('form.label.name')) !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-tag "></i>
        </span>
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su '.trans('form.label.name')]) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('phone', trans('form.label.phone')) !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-tag "></i>
        </span>
        {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su '.trans('form.label.phone')]) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('extending', trans('form.label.extending')) !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-tag "></i>
        </span>
        {!! Form::text('extending', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su '.trans('form.label.extending')]) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('password', trans('form.label.password')) !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-lock font-red"></i>
        </span>
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su '.trans('form.label.password')]) !!}
    </div>
</div>
