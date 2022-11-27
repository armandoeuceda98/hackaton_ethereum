$(document).ready(function() {

    $('body').on('click', '.btnActivarPregunta', function(){
        let pregunta = $(this).attr('data-id');
        console.log(pregunta);
        
        let url = "activate-pregunta/" + pregunta;
        
        console.log(url);
        $.ajax({
            url: url,
        }).done(function(result) {
            alert(result);
            location.reload();
        });
        
        url="";
    });

    $('#btnNuevaPregunta').on('click', function(){
        
        let usuario=$(txtUsuarioP).val();
        $('#txtUsuarioNP').val(usuario);
    });

    $('#btnGuardarNuevaPregunta').on('click', function(){
        
        let url="store-pregunta";
        var data = $('#frmNuevaPregunta').serialize();
        $.post(url, data).done(function(resp) {
            console.log(resp);
            alert(resp);
            location.reload();
        });
    });

    $('body').on('click', '.btnEliminarPregunta', function(){
        let pregunta = $(this).attr('data-id');
        console.log(pregunta);
        
        let url = "delete-pregunta/" + pregunta;
        
        console.log(url);
        $.ajax({
            url: url,
        }).done(function(result) {
            alert(result);
            location.reload();
        });
        
        url="";
    });


    $('.btnPreguntas').on('click', function(){
        
        let usuario=$(this).attr('data-id');
        let id=$(this).attr('data-pk');
        console.log(id);
        $('#txtUsuarioP').val(usuario);
        let url="preguntas-usuario/" + id;
        console.log(url);
        $.ajax({
            url: url,
        }).done(function(result) {
            $('#tbodyPreguntas').empty();
            result.forEach(element => {
                if (element.isDeleted == '0') {
                    $('#tbodyPreguntas').append(
                        '<tr>' +
                            '<td>' + element.pregunta + '</td>' +
                            '<td><button data-id="' + element.PkPregunta +'" type="button" class="btn btn-xs btn-danger btnEliminarPregunta" title="Quitar Pregunta "><i class="fa fa-trash"></i></button> </td>'+
                        '</tr>'
                    )
                } else if (element.isDeleted == '1') {
                    $('#tbodyPreguntas').append(
                        '<tr>' +
                            '<td>' + element.pregunta + '</td>' +
                            '<td>' 
                            + '<button data-id="' + element.PkPregunta +'" type="button" class="btn btn-xs btn-success btnActivarPregunta" title="Activar Pregunta "><i class="fa fa-check"></i></button>'
                            + '</td>'+
                        '</tr>'
                    )
                }
                console.log(element.pregunta);
            });
            
        });

    });
} );