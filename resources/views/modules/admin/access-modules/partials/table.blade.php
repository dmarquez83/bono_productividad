<table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th class="all">#</th>
        <th class="all">Tipo</th>
        <th class="all">Grupo / User /ID</th>
        <th class="all">Nombre</th>
        <th class="all">Empresa Id</th>
        <th class="all">Nombre Empresa</th>
        <th class="all">Todas las Empresas</th>
        <th class="all">Id Pantalla</th>
        <th class="all">Descripcion</th>
        <th class="all">Tipo</th>
        <th class="all">Modulo</th>
        <th class="all">Consultar</th>
        <th class="all">Actualizar</th>
        <th class="all">Insertar</th>
        <th class="all">Eliminar</th>
        <th class="all">Especial</th>
        <th class="all">Autorizar</th>
        <th class="none">Fecha de Creacion</th>
        <th class="none">Fecha de Actualizacion</th>
        <th class="all">Acciones</th>

    </tr>
    </thead>
    <tbody>
    @foreach($access_modules as $access_module)
        <tr data-id="{{ $access_module->id }}">
            <td align="center">{{ $access_module->id }}</td>
            <td>{{ $access_module->type_user }}</td>
            <td align="center"> {{ $access_module->id_type_user }}</td>
            <td>{{ $access_module->name_user }}</td>
            <td align="center">{{ $access_module->company_id }}</td>
            <td>{{ $access_module->name_company }}</td>
            <td align="center">
                @if ($access_module->companies_all )
                {!! Form::checkbox(null, null, $access_module->companies_all) !!}
                @endif
            </td>
            <td align="center">{{ $access_module->menu_modules_id }}</td>
            <td>{{ $access_module->name_pantalla }}</td>
            <td>{{ $access_module->type_access }}</td>
            <td>{{ $access_module->name_module }}</td>
            <td align="center">
                @if ($access_module->acc_consult )
                    {!! Form::checkbox(null, null, $access_module->acc_consult) !!}
                @endif
            </td>
            <td align="center">
                @if ($access_module->acc_update )
                    {!! Form::checkbox(null, null, $access_module->acc_update) !!}
                @endif
            </td>
            <td align="center">
                @if ($access_module->acc_insert )
                    {!! Form::checkbox(null, null, $access_module->acc_insert) !!}
                @endif
            </td>
            <td align="center">
                @if ($access_module->acc_remove )
                    {!! Form::checkbox(null, null, $access_module->acc_remove) !!}
                @endif
            </td>
            <td align="center">
                @if ($access_module->acc_special )
                    {!! Form::checkbox(null, null, $access_module->acc_special) !!}
                @endif
            </td>
            <td align="center">
                @if ($access_module->acc_authorize )
                    {!! Form::checkbox(null, null, $access_module->acc_authorize) !!}
                @endif
            </td>
            <td>{{ $access_module->created_at }}</td>
            <td>{{ $access_module->updated_at }}</td>
            <td align="center">
                <a href="#" class="btn-delete" data-toggle="Eliminar">  <i class="fa fa-remove"></i> </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>