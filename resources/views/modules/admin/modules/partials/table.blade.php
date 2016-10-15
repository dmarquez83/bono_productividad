<table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th class="all">#</th>
        <th class="all">Nombre</th>
        <th class="all">Descripcion</th>
        <th class="none">Fecha de Creacion</th>
        <th class="none">Fecha de Actualizacion</th>
        <th class="all">Acciones</th>

    </tr>
    </thead>
    <tbody>
    @foreach($modules as $module)
        <tr data-id="{{ $module->id }}">
            <td>{{ $module->id }}</td>
            <td>{{ $module->name }}</td>
            <td>{{ $module->description }}</td>
            <td>{{ $module->created_at }}</td>
            <td>{{ $module->updated_at }}</td>

            <td>
                <a href="{{ route('admin.modules.edit',$module->id) }}" data-toggle="Editar">  <i class="fa fa-edit"></i> </a>
                <a href="#" class="btn-delete" data-toggle="Eliminar">  <i class="fa fa-remove"></i> </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>