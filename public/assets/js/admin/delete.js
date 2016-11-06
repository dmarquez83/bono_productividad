/**
 * Created by dmarquez on 19/09/16.
 */
$(document).ready(function(){
//alert('Documento listo');

    $('.btn-delete').click(function(){
        var row = $(this).parents('tr');
        var id = row.data('id');
        var form = $('#form-delete');
        var url = form.attr('action').replace(':USER_ID',id);
        //serializamos el formulario
        var data = form.serialize();

        var eliminar = confirm("¿Deseas eliminar este registro?");

        if (eliminar) {
            row.fadeOut(); //desaparecer la fila antes de enivar la peticion ajax

            $.post(url, data, function (result) {
                alert(result.message);
            }).fail(function(){
                alert('El Registro no fue Eliminado');
                row.show();
            });
        }


    });

   /* $('#sample_3').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        },
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "order": [[ 0, "asc" ]],
        "info": true,
        "autoWidth": true
    });*/

   /* $('#example').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/German.json"
        }
    } );*/
});

