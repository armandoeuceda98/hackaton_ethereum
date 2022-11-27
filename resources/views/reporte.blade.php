<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
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
<div class="col-md-12">
        <div class="card">
            <div class="card-body">

<div class="row">
    <div class="col-md-10">
      <h3>Reporte</h3>
      <p>Revisa los resultados de las preguntas por perfil.</p>
    </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Perfil:</label>
                <select class="form-control" name="cmbUsuario" id="cmbUsuario">
                    @foreach($datos['usuarios'] as $usuario)
                        <option value="{{$usuario->PkUsuario}}">{{$usuario->usuario}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <!-- <div class="col-md-2">
            <div class="form-group">
                <label for="">Desde:</label>
                <input class="form-control" type="date" id="dateDesde">
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="">Hasta:</label>
                <input class="form-control" type="date" id="dateHasta">
            </div>
        </div> -->
        <div class="col-md-1">
            <div class="form-group">
                <label for=""></label>
                <button type="button" class="btn" style="background: rgb(90, 97, 195);color: white" id="btnBuscar">Buscar</button>
            </div>
        </div>
    </div>
    </div>
  </div>
</div>

<div class="col-md-12">
    <table class="table" id="tblUsuarios" >
        <thead>
            <tr>
                <th>Pregunta</th>
                <th>Positivo</th>
                <th>Negativo</th>
            </tr>
        </thead>
        <tbody id="tBodyPreguntas">
        </tbody>
    </table>
</div>

</body>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/reporte.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('bootstrap/js/jquery.dataTables.min.js') }}"></script>
</html>