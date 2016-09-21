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
    {!! Form::label('email', 'Correo Electronico') !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-envelope"></i>
        </span>
        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su e-mail']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('password', 'Contraseña') !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-lock font-red"></i>
        </span>
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su Contraseña']) !!}
    </div>
</div>

