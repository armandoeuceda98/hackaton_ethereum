<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    <title>Home | NFT Gallery</title>
</head>
<style>

</style>
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
            <div class="col-lg-8 text-center" style="background-color:white">
                <h2>Publicaciones</h2>
                <p>Los NFT mas curseados que vas a encontrar.</p>
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
                                <div class="col-md-3">
    
                                    <p>{{$publicacion->descripcion}}</p>
                                    <a href="{{$publicacion->enlace}}">Enlace NFT</a>
                                </div>
                            </div>
                            <br>
                            <a href="{{url('feeduser')}}/{{$publicacion->FkUsuario}}">Autor: {{$publicacion->nickname}}</a>
                        </div>
                    </div>                    
                    
                    @endforeach
                </div>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
    </div>

</body>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('bootstrap/js/jquery.dataTables.min.js') }}"></script>
</html>