<div class="form-group">
    {!! Form::label('name', 'Nompre del Grupo') !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-tag"></i>
        </span>
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca el Nombre del Grupo']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('description', 'Descripción del Grupo') !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-tags"></i>
        </span>
        {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca la Descripción del Grupo']) !!}
    </div>
</div>
<div class="form-group">
    <div class="fileinput fileinput-new" data-provides="fileinput">
        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
         <img src="{{ asset('img/group/'.$group->avatar)}}" class="img-responsive" alt="" >
        </div>
        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
        <div>
            <span class="btn default btn-file">
                <span class="fileinput-new"> Seleccione Imagen </span>
                <span class="fileinput-exists"> Cambiar </span>
                <input type="file" name="avatar">
            </span>
            <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Eliminar </a>
        </div>
    </div>
</div>

