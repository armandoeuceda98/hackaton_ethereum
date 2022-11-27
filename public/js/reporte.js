$(document).ready(function() {
    $('.table').DataTable({
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json'
        },
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false

    });

    $('#btnBuscar').on('click', function(){

        let id = $('#cmbUsuario').val();
        // let desde = $('#dateDesde').val();
        // let hasta = $('#dateHasta').val();
        
        console.log(id);
        // console.log(desde);
        // console.log(hasta);
        let url="reporte-usuario/" + id;
        console.log(url);
        $.ajax({
            url: url,
        }).done(function(result) {
            $('#tBodyPreguntas').empty();
            if (result) {

                result.forEach(element => {
                    $('#tBodyPreguntas').append(
                        '<tr>' +
                            '<td>' + element.pregunta + '</td>' +
                            '<td>' + element.porcentajeP +'%</td>'+
                            '<td>' + element.porcentajeN +'%</td>'+
                        '</tr>'
                    )
                    console.log(element.pregunta);
                });
            }
            
        });

    });
} );