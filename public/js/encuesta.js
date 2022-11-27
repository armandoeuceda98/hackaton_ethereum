
let preguntas = [];
let actual = 0;
let size;
function getPreguntas() {
    let url = "get-preguntas";

    console.log(url);
    $.ajax({
        url: url,
    }).done(function (result) {
        // console.log(result[0].pregunta);
        preguntas = result
        console.log(result.length);
        size = result.length;
        console.log(size);
        adaptar();
        $('#contenedor' + preguntas[0].PkPregunta).show();
        $('#pagina').text((actual + 1) + ' de ' + size);
    });
}

getPreguntas();

function adaptar() {
    let width = $(window).width();
    let height = $(window).height();
    $('#container1').height(height * 0.26);
    $('.contenedor').height(height * 0.58);
    $('#containerOpinion').height(height * 0.58);
    $('#container3').height(height * 0.16);
    $(".cara").height(height * 0.48);
    $("#txtTitulo").css("fontSize", width * 0.07);
    $("#txtGracias").css("fontSize", width * 0.05);
    $("#txtTitulo").css("padding-top", ($('#container1').height()) * 0.2);
    $("#txtGracias").css("padding-top", ($('#containerOpinion').height()) * 0.2);
    console.log(width);
    console.log(height);
}
adaptar();
$(window).resize(function () {
    adaptar();
});

$('.cara').on('click', function () {
    let valor = $(this).attr('data-value');
    let url_ip = "validar-acceso";
    let voto;
    $.ajax({
        url: url_ip,
    }).done(function (result) {
        console.log('acceso:' + result);
        if (result == 1) {
            if (actual + 1 == size) {
                $('#txtMensaje').show();
                $('#caraTriste').toggle(1000);
                $('#caraFeliz').toggle(1000);
                $('#contenedor'+preguntas[actual].PkPregunta).toggle(1000);
                $('#containerOpinion').toggle(2000);
                if (valor == 3) {
                    voto = 1;
                    $('#imgOpinion').attr('src', "img/feliz.gif");
                    console.log('feli');
                } else {
                    voto = 0;
                    $('#imgOpinion').attr('src', "img/sad.gif");
                    console.log('trite');
                }
                let url = "votar/" + preguntas[actual].PkPregunta + "/" + voto;
                console.log(url);
                $.ajax({
                    url: url,
                }).done(function (result) {
                    console.log(result);
                    if (result == "1") {
                        actual = 0;
                        window.setTimeout(() => {
                            console.log('felicitoms');
                            $('#contenedor' + preguntas[actual].PkPregunta).show();
                            $('#containerOpinion').hide();
                            $('#caraFeliz').show();
                            $('#caraTriste').show();
                            $('#txtMensaje').hide();
                            $('#pagina').text((actual + 1) + ' de ' + size);
                        }, 5000);

                    }
                });
            } else { 
                $('#contenedor'+preguntas[actual].PkPregunta).toggle(1000);
                actual = actual + 1;
                if (valor == 3) {
                    voto = 1;
                    $('#imgOpinion').attr('src', "img/feliz.gif");
                    console.log('feli');
                } else {
                    voto = 0;
                    $('#imgOpinion').attr('src', "img/sad.gif");
                    console.log('trite');
                }
                let url = "votar/" + preguntas[actual].PkPregunta + "/" + voto;
                console.log(url);
                $.ajax({
                    url: url,
                }).done(function (result) {
                    console.log(result);
                    if (result == "1") {
                        $('#contenedor'+preguntas[actual].PkPregunta).toggle(1000);
                        $('#pagina').text((actual + 1) + ' de ' + size);
                    }
                });
            }

        } else {
            location.reload();
        }
    })
});