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

    $('.btnCambiar').on('click', function(){
        
        let id=$(this).attr('data-id');
        $('#txtUsuario').val(id);
    });

    $('#btnGuardarContrasena').on('click', function(){
        
        let url="cambiar-contrasena";
        console.log(url);
        var data = $('#frmContrasena').serialize();
        $.post(url, data).done(function(resp) {
            console.log(resp);
            alert(resp);
            location.reload();
        });
    });

    $('#btnGuardarNuevo').on('click', function(){
        
        let url="store-usuario";
        console.log(url);
        var data = $('#frmNuevo').serialize();
        $.post(url, data).done(function(resp) {
            console.log(resp);
            alert(resp);
            location.reload();
        });
    });

    $('.btnEliminar').on('click', function(){
        
        let id=$(this).attr('data-id');
        console.log(id);
        let url="delete-usuario/" + id;
        console.log(url);
        $.ajax({
            url: url,
        }).done(function(result) {
            console.log(result);
            alert(result);
            location.reload();
        });

    });

    $('.btnActivar').on('click', function(){
        
        let id=$(this).attr('data-id');
        console.log(id);
        let url="activar-usuario/" + id;
        console.log(url);
        $.ajax({
            url: url,
        }).done(function(result) {
            console.log(result);
            alert(result);
            location.reload();
        });

    });
} );