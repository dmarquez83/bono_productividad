<table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th class="all">#</th>
        <th class="all">{{ trans('form.label.username') }}</th>
        <th class="min-tablet">Email</th>
        <th class="all">Status</th>
        <th class="none">Fecha de Creacion</th>
        <th class="none">Fecha de Actualizacion</th>
        <th class="all">Acciones</th>

    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr data-id="{{ $user->id }}">
            <td>{{ $user->id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->status }}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->updated_at }}</td>

            <td>
                <a href="{{ route('admin.users.edit',$user->id) }}" data-toggle="Editar">  <i class="fa fa-edit"></i> </a>
                <a href="#" class="btn-delete" data-toggle="Eliminar">  <i class="fa fa-remove"></i> </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>