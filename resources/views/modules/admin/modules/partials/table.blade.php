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
        <tr ng-controller="accessUsersController" ng-init="modules_id = {{ $module->id }}" data-id="{{ $module->id }}">
            <td>{{ $module->id }}</td>
            <td>{{ $module->name }}</td>
            <td>{{ $module->description }}</td>
            <td>{{ $module->created_at }}</td>
            <td>{{ $module->updated_at }}</td>
            <td>
                @include('modules.admin.modules.partials.acc_consult')
                @include('modules.admin.modules.partials.remove_list')
            </td>
        </tr>
    @endforeach
    </tbody>
</table>