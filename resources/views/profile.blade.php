<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    <title>Perfil | {{$datos['usuario']->nickname}}</title>
</head>
<body style="background-color: rgb(97, 150, 200">
    <nav class="navbar navbar-default" style="background: rgb(90, 97, 195);color: white">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand active" style="color: white" href="{{url('home')}}">NFT Gallery</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                </ul>
                <div class="navbar-menu-wrapper d-flex align-items-center">
                <p class="text-right"  ><a style="color: white" href="{{url('feeduser')}}/{{Session::get('id')}}">{{Session::get('usuario')}}</a></p>
                    <p class="text-right" ><a style="color:grey" href="{{url('logout')}}">Cerrar Sesión</a></p>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8 text-left" style="background-color:white">
                <h2>{{$datos['usuario']->nickname}}</h2>
                <p>{{$datos['usuario']->nombre}} {{$datos['usuario']->apellido}}</p>
                <p>{{$datos['usuario']->email}}</p>
                <br>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
        <br>
        
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8 text-left" style="background-color:white">
                <h2>Bio</h2>
                <p>{{$datos['usuario']->descripcion}}</p>
                @if($datos['usuario']->nickname == Session::get('usuario'))
                    <div>
                        <h3 style="color: ">Publicar</h3>
                        <button type="button" id="btnNuevaPublicacion" class="btn" style="background: rgb(90, 97, 195);color: white" data-toggle="modal" data-target="#mdlNuevo">Nueva Publicación</button>
                    </div>
                @endif
                <h2>Publicaciones</h2>
                <br>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8" style="background-color:white">
                <div class="row">
                    @foreach($datos['publicaciones'] as $publicacion)
                    <div class="col-md-2"> </div>
                    <div class="col-md-10">

                        <div class="card">
                            <h1>{{$publicacion->titulo}}</h1>
                            <div class="row">
                                <div class="col-md-2">
    
                                    <img src="{{$publicacion->enlaceImagen}}" height="100" width="100" alt=""> 
                                </div>
                                <div class="col-md-4">
    
                                    <p>{{$publicacion->descripcion}}</p>
                                    <a href="{{$publicacion->enlace}}">Enlace NFT</a>
                                </div>
                            </div>
                            <br>
                            <p>Autor: {{$publicacion->nickname}}</p>
                        </div>
                    </div>                    
                    
                    @endforeach
                </div>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
    </div>

<div class="modal fade" id="mdlNuevo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Publicación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{url('store-publicacion')}}" method="POST" id="frmNuevo">
          <div class="modal-body">
              <div id="" class="form-group">
                  <label for="">Título</label>
                  <input type="text" name="titulo" class="form-control" id="txtTitulo" placeholder="NTF">
              </div>
              <div id="" class="form-group">
                  <label for="">Descripción</label>
                  <input type="text" name="descrip" class="form-control" id="txtDescripN" placeholder="Descripción">
              </div>
              <div id="" class="form-group">
                  <label for="">Enlace de Imagen</label>
                  <input type="text" name="imagen" class="form-control" id="txtImagen" placeholder="imagen.com/imagen123">
              </div>
              <div id="" class="form-group">
                  <label for="">Enlace de NFT</label>
                  <input type="text" name="nft" class="form-control" id="txtNFT" placeholder="ntf.com/nft123">
              </div>
          </div>
          <div class="modal-footer">
              <button type="submit" id="btnGuardarNuevo" class="btn" style="background: rgb(90, 97, 195);color: white">Guardar</button>
          </div>
      </form>
    </div>
  </div>
</div>

</body>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('bootstrap/js/jquery.dataTables.min.js') }}"></script>
</html>