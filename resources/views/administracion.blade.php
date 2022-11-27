<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <title>Administración</title>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand active" href="{{url('administracion')}}">Encuestas</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{url('usuarios')}}">Perfiles <span class="sr-only">(current)</span></a></li>
        <li><a href="{{url('reporte')}}">Reporte <span class="sr-only">(current)</span></a></li>
      </ul>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <p class="text-right" >{{$datos['usuario']}}</p>
        <p class="text-right" ><a style="color:grey" href="{{url('logout')}}">Cerrar Sesión</a></p>
      </div>
    </div>
  </div>
</nav>
<div class="text-center">
    <img src="img/encuesta.png" id="img" alt="">
    <h1>Sistema de Encuestas</h1>
</div>

</body>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<script>
    
    let height = $(window).height();
    $("#img").height(height*0.60);
</script>
</html>