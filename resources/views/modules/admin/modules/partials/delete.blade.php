{!! Form::open(['route' => ['admin.modules.destroy', $module], 'method' => 'DELETE']) !!}

    <button type="submit" onclick="return confirm('Seguro que desea Eliminar?')" class="btn btn-danger">Eliminar Modulo</button>

{!! Form::close() !!}