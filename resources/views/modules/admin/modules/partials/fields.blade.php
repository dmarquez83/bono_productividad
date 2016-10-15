<div class="form-group">
    {!! Form::label('name', 'Nompre del Modulo') !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-tags"></i>
        </span>
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca el Nombre del modulo']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('dewscription', 'Descripcion del Modulo') !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-navicon"></i>
        </span>
        {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca la Descripcion del Modulo']) !!}
    </div>
</div>
