{!! Form::open(['route' => 'user.update', 'method' => 'POST', 'files' => 'true']) !!}
    <div class="form-group">
        <div class="fileinput fileinput-new" data-provides="fileinput">

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
    <div class="margin-top-10">
        <button type="submit" class="btn green">Guardar</button>
    </div>
{!! Form::close() !!}