<div class="form-group">
    {!! Form::label('name', 'Nompre de la Pantalla') !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-tags"></i>
        </span>
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca el Nombre de la pantalla']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('module_id', 'Modulo') !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-navicon"></i>
        </span>
        {!! Form::select('module_id', $modules, null, ['class' => 'form-control']) !!}

    </div>
</div>
<div class="form-group">
    {!! Form::label('route_id', 'Ruta') !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-navicon"></i>
        </span>
        {!! Form::select('route_id', $routes, null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('type_access', 'Tipo') !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-navicon"></i>
        </span>
        {!! Form::select('type_access',  array('Pantalla' => 'Pantalla', 'Reporte' => 'Reporte'),null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('menu_item', 'Se incluye en el menú?') !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-navicon"></i>
        </span>
        {!! Form::select('menu_item', array('Y' => 'Si', 'N' => 'No'), null, ['class' => 'form-control']) !!}
    </div>
</div>
