{!! Form::open(['route' => ['admin.companies.destroy', $company], 'method' => 'DELETE']) !!}

    <button type="submit" onclick="return confirm('Seguro que desea Eliminar?')" class="btn btn-danger">Eliminar Empresa</button>

{!! Form::close() !!}