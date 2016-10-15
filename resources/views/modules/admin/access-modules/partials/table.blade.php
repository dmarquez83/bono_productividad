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
            <td>{{ $access_module->id }}</td>
            <td>{{ $access_module->type_user }}</td>
            <td>{{ $access_module->id_type_user }}</td>
            <td>nombre</td>
            <td>{{ $access_module->company_id }}</td>
            <td>nombre empresa</td>
            <td>{{ $access_module->companies_all }}</td>
            <td>{{ $access_module->menu_modules_id }}</td>
            <td>descripcion</td>
            <td>tipo</td>
            <td>Modulo</td>
            <td>{{ $access_module->acc_consult }}</td>
            <td>{{ $access_module->acc_update }}</td>
            <td>{{ $access_module->acc_insert }}</td>
            <td>{{ $access_module->acc_remove }}</td>
            <td>{{ $access_module->acc_special }}</td>
            <td>{{ $access_module->acc_authorize }}</td>
            <td>{{ $access_module->created_at }}</td>
            <td>{{ $access_module->updated_at }}</td>

            <td>
                <a href="{{ route('admin.access-modules.edit',$access_module->id) }}" data-toggle="Editar">  <i class="fa fa-edit"></i> </a>
                <a href="#" class="btn-delete" data-toggle="Eliminar">  <i class="fa fa-remove"></i> </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>