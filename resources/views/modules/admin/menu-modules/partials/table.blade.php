<table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th class="all">#</th>
        <th class="all">Nombre</th>
        <th class="all">MenuItem</th>
        <th class="all">Tipo</th>
        <th class="all">Modulo</th>
        <th class="all">Ruta</th>
        <th class="none">Fecha de Creacion</th>
        <th class="none">Fecha de Actualizacion</th>
        <th class="all">Acciones</th>

    </tr>
    </thead>
    <tbody>
    @foreach($menu_modules as $menu_module)
        <tr data-id="{{ $menu_module->id }}">
            <td>{{ $menu_module->id }}</td>
            <td>{{ $menu_module->name }}</td>
            <td>{{ $menu_module->MenuItem }}</td>
            <td>{{ $menu_module->type_access }}</td>
            <td>{{ $menu_module->module->name }}</td>
            <td>{{ $menu_module->route->name }}</td>
            <td>{{ $menu_module->created_at }}</td>
            <td>{{ $menu_module->updated_at }}</td>

            <td>
                <a href="{{ route('admin.menu-modules.edit',$menu_module->id) }}" data-toggle="Editar">  <i class="fa fa-edit"></i> </a>
                <a href="#" class="btn-delete" data-toggle="Eliminar">  <i class="fa fa-remove"></i> </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>