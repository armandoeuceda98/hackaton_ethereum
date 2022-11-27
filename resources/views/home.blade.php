<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | NFT Gallery</title>
</head>
<body>
    <h1>Todo bien {{Session::get('usuario')}}</h1>
    <div>
        @foreach($datos['publicaciones'] as $publicacion)
            <h1>{{$publicacion->titulo}}</h1>
            <img src="{{$publicacion->enlaceImagen}}" height="100" width="100" alt="">
            <br>
            <p>Autor: {{$publicacion->nickname}}</p>
            <a href="{{$publicacion->enlace}}">{{$publicacion->enlace}}</a>
        @endforeach
    </div>
</body>
</html>