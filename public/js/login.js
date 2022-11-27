$('#logear').on('click', function(){
    $('#alerta').text('');

    let url = "login"
    var data = $('#frmLogin').serialize();
    $.post(url, data).done(function(resp) {
        console.log(resp);
        if (resp == '1') {
            location.reload();
        } else {
            $('#alerta').text('Usuario o contraseña incorrecto.');
        }
    });
});

$('#btnGuardarNuevo').on('click', function(){

    let url = "store-usuario"
    var data = $('#frmNuevo').serialize();
    $.post(url, data).done(function(resp) {
        console.log(resp);
        alert(resp);
        location.reload();
    });
});
