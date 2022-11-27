<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <title>Sin Preguntas :(</title>
</head>
<body>
    <div class="container-fluid bg-primary" id="container1" style="height: 150px">
        <div class="text-center text-uppercase" style="" id="txtTitulo">¡Oh, oh! </div>
    </div>
    <div class="row" >
        <div class="col-md-12 text-center" style="padding-top: 15px">
            <img src="{{asset('/img/crying.png')}}" class="cara" id="cara" alt="">
            <h1>Lo sentimos, no tienes preguntas de este usuario.</h1>
        </div>
    </div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<script>
    let width = $(window).width();
    let height = $(window).height();
    $('#container1').height(height*0.26);
    $("#txtTitulo").css("fontSize", width*0.07);
    $("#txtTitulo").css("padding-top", ($('#container1').height())*0.2);
    $(".cara").height(height*0.53);
</script>
</body>
</html>