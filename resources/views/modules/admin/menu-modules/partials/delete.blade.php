{!! Form::open(['route' => ['admin.menu-modules.destroy', $menu_module], 'method' => 'DELETE']) !!}

    <button type="submit" onclick="return confirm('Seguro que desea Eliminar?')" class="btn btn-danger">Eliminar mantenimiento de pantalla</button>

{!! Form::close() !!}