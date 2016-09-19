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
<div class="form-group">
    {!! Form::label('first_name', 'Nombre') !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-tag "></i>
        </span>
        {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su Nombre']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('last_name', 'Apellido') !!}
    {!! Form::label('first_name', 'Nombre') !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-tags "></i>
        </span>
        {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su Apellido']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('type', 'Tipo de Usuario') !!}
    {!! Form::select('type', ['' => 'Selecione el Tipo de Usuario','user' => 'Usuario', 'admin' => 'Administrador'], null, ['class' => 'form-control'] ) !!}
</div>