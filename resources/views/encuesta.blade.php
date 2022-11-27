<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <title>Encuestas</title>
</head>
<body>
<div class="container-fluid" style="background: rgb(90, 97, 195);" id="container1">
        <div class="text-center text-uppercase" style="color:white" id="txtTitulo">¡Califica tu experiencia!</div>
    </div>
    <div class="container-fluid text-center" id="containerOpinion" style="display:none; padding-top: 15px">
        <div class="text-center text-uppercase" style="" id="txtGracias">¡Gracias por su opinión!</div>
    </div>
    <input type="text" value="" style="display:none">
    @foreach($datos['preguntas'] as $pregunta)
    <div class="container-fluid" class="contenedor" id="contenedor{{$pregunta->PkPregunta}}" style="display:none;">
        <h1 class="text-center" id=>{{$pregunta->pregunta}}</h1>
        <div class="row" style="padding: 15px;">
            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">

            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 text-center">
                <img src="{{asset('/img/triste.png')}}" class="cara" id="caraTriste" data-value="2" alt="">
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
                
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 text-center">
                <img src="{{asset('/img/alegre.png')}}" class="cara" id="caraFeliz" data-value="3" alt="">
            </div>
            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                
            </div>
        </div>
    </div>
    @endforeach
    <div class="container-fluid" style="background: rgb(90, 97, 195);" id="container3">
        <h1 class="text-center" id="txtMensaje"></h1>
        <p id="pagina" style="color:white"></p>
        @if($datos['usuario'] == 'admin')
            <a href="{{url('administracion')}}" style="color:white"><h3 class="text-right" id="sucursal" data-value="">{{$datos['usuario']}}</h3></a>
        @else
            <h3 class="text-right" id="sucursal" data-value="">{{$datos['usuario']}}</h3>
        @endif
    </div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('js/encuesta.js') }}"></script>
</body>
</html>