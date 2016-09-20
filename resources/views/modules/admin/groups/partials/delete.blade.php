{!! Form::open(['route' => ['admin.groups.destroy', $group], 'method' => 'DELETE']) !!}

    <button type="submit" onclick="return confirm('Seguro que desea Eliminar?')" class="btn btn-danger">Eliminar Grupo</button>

{!! Form::close() !!}