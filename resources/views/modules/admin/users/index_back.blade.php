@extends('partials.home.index')
@section('name')
    Usuarios
@endsection
@section('title')
    Usuarios del Sistema
@endsection
@section('configure')
@endsection
@section('sidebar')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Usuarios
                </div>
                @if (Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                @endif
                <div class="panel-body">
                    {!! Form::open(['route' => 'admin.users.index', 'method' => 'GET','class' =>'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
                        <div class="form-group">
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de Usuario']) !!}
                        </div>
                        <button type="submit" class="btn btn-default">Buscar</button>
                    {!! Form::close() !!}
                    <p>
                        <a class="btn btn-default" href="{{ route('admin.users.create') }}" role="button">
                            Nuevo Usuario
                        </a>
                    </p>
                   <!-- <p>Hay {{ $users->lastPage() }} Páginas</p>-->
                    <p>Hay {{ $users->total() }} Usuarios</p>
                    @include('modules.admin.users.partials.table')
                    {!! $users->render() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet box green">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-globe"></i>Usuarios</div>
                                <div class="tools"> </div>
                            </div>
                            <div class="portlet-body">
                                <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th class="all">First name</th>
                                        <th class="min-phone-l">Last name</th>
                                        <th class="min-tablet">Position</th>
                                        <th class="none">Office</th>
                                        <th class="none">Age</th>
                                        <th class="none">Start date</th>
                                        <th class="desktop">Salary</th>
                                        <th class="none">Extn.</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Tiger</td>
                                        <td>Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td>5421</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett</td>
                                        <td>Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        <td>8422</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton</td>
                                        <td>Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                        <td>1562</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END EXAMPLE TABLE PORTLET-->
                    </div>
                </div>
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->

    {!! Form::open(['route' => ['admin.users.destroy', ':USER_ID'], 'method' => 'DELETE','id' =>'form-delete']) !!}
    {!! Form::close() !!}

@endsection

@section('scripts')
<script>
$(document).ready(function(){
//alert('Documento listo');
    $('.btn-delete').click(function(){
        var row = $(this).parents('tr');
        var id = row.data('id');
        var form = $('#form-delete');
        var url = form.attr('action').replace(':USER_ID',id);
        //serializamos el formulario
        var data = form.serialize();

        row.fadeOut(); //desaparecer la fila antes de enivar la peticion ajax

        $.post(url, data, function (result) {
            alert(result.message);
        }).fail(function(){
            alert('El usuario no fue Eliminado');
            row.show();
        });

    });
});
</script>
@endsection