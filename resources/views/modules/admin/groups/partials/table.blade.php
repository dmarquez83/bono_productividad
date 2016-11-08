<table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th class="all">#</th>
        <th class="all">Nombre</th>
        <th class="all">Descripción</th>
        <th class="none">Fecha de Creacion</th>
        <th class="none">Fecha de Actualizacion</th>
        <th class="all">Acciones</th>

    </tr>
    </thead>
    <tbody>
    @foreach($groups as $group)
        <tr ng-controller="accessUsersController" ng-init="modules_id = {{ $group->id }}" data-id="{{ $group->id }}">
            <td>{{ $group->id }}</td>
            <td>{{ $group->name }}</td>
            <td>{{ $group->description }}</td>
            <td>{{ $group->created_at }}</td>
            <td>{{ $group->updated_at }}</td>

            <td>
               <!-- <a href="{{ route('admin.groups.edit',$group->id) }}" data-toggle="Editar">  <i class="fa fa-edit"></i> </a>
                <a href="#" class="btn-delete" data-toggle="Eliminar">  <i class="fa fa-remove"></i> </a>-->
                @include('modules.admin.groups.partials.acc_consult')
                @include('modules.admin.groups.partials.remove_list')
            </td>
        </tr>
    @endforeach
    </tbody>
</table>