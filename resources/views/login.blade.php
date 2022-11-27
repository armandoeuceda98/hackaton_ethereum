<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    <title>Login | NFT Gallery</title>

    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        .login-page {
        width: 360px;
        padding: 8% 0 0;
        margin: auto;
        }
        .form {
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
        }
        .form button {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: rgb(90, 97, 195);
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
        }
        .form button:hover,.form button:active,.form button:focus {
        background: rgb(80, 97, 195);
        }
        .form .message {
        margin: 15px 0 0;
        color: #b3b3b3;
        font-size: 12px;
        }
        .form .message a {
        color: #4CAF50;
        text-decoration: none;
        }
        .form .register-form {
        display: none;
        }
        .container {
        position: relative;
        z-index: 1;
        max-width: 300px;
        margin: 0 auto;
        }
        .container:before, .container:after {
        content: "";
        display: block;
        clear: both;
        }
        .container .info {
        margin: 50px auto;
        text-align: center;
        }
        .container .info h1 {
        margin: 0 0 15px;
        padding: 0;
        font-size: 36px;
        font-weight: 300;
        color: #1a1a1a;
        }
        .container .info span {
        color: #4d4d4d;
        font-size: 12px;
        }
        .container .info span a {
        color: #000000;
        text-decoration: none;
        }
        .container .info span .fa {
        color: #EF3B3A;
        }
        body {
        background: #76b852; /* fallback for old browsers */
        background: rgb(90, 97, 195);
        font-family: "Roboto", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;      
        }
    </style>
</head>
<body>
    <div class="login-page">
    <div class="form">
        <h3>NFT Gallery</h3>
        <form class="login-form" id="frmLogin">
            <input type="text" id="user" name="user" placeholder="Usuario"/>
            <input type="password" id="password" name="password" placeholder="Contraseña"/>
            <label id="alerta" class="invalid-feedback"></label>
            <button id="logear" type="button">Iniciar Sesión</button>
            <p>ó</p>
            <button type="button" id="btnNuevoUsuario" class="btn" data-toggle="modal" data-target="#mdlNuevo">Registrarse</button>
        </form>
    </div>
    </div>

<div class="modal fade" id="mdlNuevo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST" id="frmNuevo">
          <div class="modal-body">
              <div id="" class="form-group">
                  <label for="">Nickname</label>
                  <input type="text" name="usuario" class="form-control" id="usuario" placeholder="usuario123">
              </div>
              <div id="" class="form-group">
                  <label for="">Contraseña</label>
                  <input type="password" name="contra" class="form-control" id="txtContra" placeholder="**********">
              </div>
              <div id="" class="form-group">
                  <label for="">Nombre</label>
                  <input type="text" name="nombre" class="form-control" id="txtNombre" placeholder="Eiken">
              </div>
              <div id="" class="form-group">
                  <label for="">Apellido</label>
                  <input type="text" name="apellido" class="form-control" id="txtApellido" placeholder="Ortega">
              </div>
              <div id="" class="form-group">
                  <label for="">Email</label>
                  <input type="email" name="email" class="form-control" id="txtEmail" placeholder="mail@email.com">
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" id="btnGuardarNuevo" class="btn" style="background: rgb(90, 97, 195);color: white">Guardar</button>
          </div>
      </form>
    </div>
  </div>
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('js/login.js') }}"></script>
</body>
</html>