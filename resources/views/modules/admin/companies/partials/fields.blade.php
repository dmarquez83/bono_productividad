<div class="form-group">
    {!! Form::label('name', 'Nompre de la Empresa') !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-tags"></i>
        </span>
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca el Nombre de la Empresa']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('cpnyid', 'Id') !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-tag "></i>
        </span>
        {!! Form::text('cpnyid', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca el Identificador de la empresa']) !!}
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
