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
      <h3>Perfiles</h3>
      <p>Administra Perfiles, sus preguntas y sus contraseñas.</p>
    </div>
    <div class="col-md-2">
    <button type="button" id="btnNuevoPlan" class="btn" style="background: rgb(90, 97, 195);color: white" data-toggle="modal" data-target="#mdlNuevo">Nuevo Perfil</button>
    </div>
    </div>
    </div>
  </div>
</div>

<div class="col-md-12">
    <table class="table" id="tblUsuarios" >
        <thead>
            <tr>
                <th>Perfil</th>
                <th>Descripcion</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($datos['usuarios'] as $usuario)
        <tr>
            <td>{{$usuario->usuario}}</td>
            <td>{{$usuario->usuario}}</td>
            <td><button data-id="{{$usuario->usuario}}" type="button" class="btn btn-xs btnCambiar" style="background: rgb(90, 97, 195);color: white" data-toggle="modal" data-target="#mdlCambiar" title="Cambiar Contraseña"><i class="fa fa-refresh"></i></button>
              @if($usuario->usuario != 'admin')
                @if($usuario->isDeleted == 0)
                  <button data-id="{{$usuario->usuario}}" type="button" class="btn btn-xs btn-danger btnEliminar" title="Quitar Usuario "><i class="fa fa-trash"></i></button>
                  @else
                  <button data-id="{{$usuario->usuario}}" type="button" class="btn btn-xs btn-success btnActivar" title="Activar Usuario "><i class="fa fa-check"></i></button>
                @endif
                  <button data-id="{{$usuario->usuario}}" data-pk="{{$usuario->PkUsuario}}" type="button" class="btn btn-xs btn-warning btnPreguntas" data-toggle="modal" data-target="#mdlPreguntas" title="Preguntas de Usuario "><i class="fa fa-question"></i></button>
              @endif
            </td>
            
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="modal fade" id="mdlCambiar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cambiar Contraseña</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{url('cambiar-contrasena')}}" method="POST" id="frmContrasena">
          <div class="modal-body">
              <div id="" class="form-group">
                  <label for="">Perfil</label>
                  <input type="text" name="usuario" class="form-control" id="txtUsuario"  readonly>
              </div>
              <div id="" class="form-group">
                  <label for="">Contraseña</label>
                  <input type="password" name="contrasena" class="form-control" id="txtContrasena" placeholder="*********">
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" id="btnGuardarContrasena" class="btn" style="background: rgb(90, 97, 195);color: white">Guardar</button>
          </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="mdlNuevo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{url('store-usuario')}}" method="POST" id="frmNuevo">
          <div class="modal-body">
              <div id="" class="form-group">
                  <label for="">Perfil</label>
                  <input type="text" name="usuario" class="form-control" id="txtUsuarioN" placeholder="Perfil">
              </div>
              <div id="" class="form-group">
                  <label for="">Descripción</label>
                  <input type="text" name="descrip" class="form-control" id="txtDescripN" placeholder="Descripción">
              </div>
              <div id="" class="form-group">
                  <label for="">Contraseña</label>
                  <input type="password" name="contrasena" class="form-control" id="txtContrasenaN" placeholder="*********">
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" id="btnGuardarNuevo" class="btn" style="background: rgb(90, 97, 195);color: white">Guardar</button>
          </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="mdlPreguntas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Preguntas de Perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST" id="frmPreguntas">
          <div class="modal-body">
              <div id="" class="form-group">
                  <label for="">Perfil</label>
                  <input type="text" name="usuario" class="form-control" id="txtUsuarioP" placeholder="Perfil" readonly>
              </div>
              <div id="" class="form-group">
              <button type="button" id="btnNuevaPregunta" class="btn" style="background: rgb(90, 97, 195);color: white" data-toggle="modal" data-target="#mdlNuevaPregunta">Nueva Pregunta</button>
              </div>
              <div id="" class="form-group">
              <table class="table" id="tblPreguntas">
                <thead>
                    <tr>
                        <th>Pregunta</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody id="tbodyPreguntas">
                  
                </tbody>
            </table>
              </div>
          </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="mdlNuevaPregunta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Pregunta </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST" id="frmNuevaPregunta">
          <div class="modal-body">
              <div id="" class="form-group">
                  <label for="">Perfil</label>
                  <input type="text" name="usuario" class="form-control" id="txtUsuarioNP" placeholder="Perfil" readonly>
              </div>
              <div id="" class="form-group">
                  <label for="">Pregunta</label>
                  <input type="text" name="pregunta" class="form-control" id="txtPregunta" placeholder="Escribe algo...">
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" id="btnGuardarNuevaPregunta" class="btn" style="background: rgb(90, 97, 195);color: white">Guardar</button>
          </div>
      </form>
    </div>
  </div>
</div>

</body>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/usuarios.js') }}"></script>
<script src="{{ asset('js/preguntas.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('bootstrap/js/jquery.dataTables.min.js') }}"></script>
</html>