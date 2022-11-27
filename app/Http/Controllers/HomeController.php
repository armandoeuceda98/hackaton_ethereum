<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use App\Usuarios;

class HomeController extends Controller
{

    public function usuarios(){
        $usuario = Session::get('usuario');

        $usuarios = Usuarios::all();
        if ($usuario != $usuarios[0]->usuario){
            return view('acceso_denegado');
        }

        return $usuarios;
    }

    public function feed() {
        if (is_null(Session::get('usuario'))) {

            return view('login');
        }

        
    }

    public function homeView() {
        if (is_null(Session::get('usuario'))) {

            return view('login');
        }

        return view('home');
    }

    public function registro() {
        $usuario = Session::get('usuario');

        $usuarios = Usuarios::all();
        if ($usuario != $usuarios[0]->usuario){
            return view('acceso_denegado');
        }

        return view('crear_usuario');
    }

    public function storeUsuario(Request $request) {
        $usuario = new Usuarios;

        $usuarioIgual = Usuarios::where('usuario', $request->usuario)->first();

        if ($usuarioIgual) {
            return 'El usuario ya existe.';
        }

        $usuario->usuario = $request->usuario;
        $usuario->contrasena = $request->contrasena;
        $usuario->descripcion = $request->descrip;
        $usuario->save();

        return 'Usuario creado con éxito.';
    }

    public function cambiarContrasena(Request $request) {
        $usuario = Session::get('usuario');

        $usuarios = Usuarios::all();
        if ($usuario != $usuarios[0]->usuario){
            return view('acceso_denegado');
        }

        $usuario = Usuarios::where('usuario', $request->usuario)->first();

        $usuario->contrasena = $request->contrasena;
        $usuario->save();

        return 'Cambio exitoso.';
    }

    public function validarAcceso() {

        if (Session::get('usuario')) {
            return 1;
        } else {
            return view('login');
        }
    }

    public function loginView(){

        if (is_null(Session::get('usuario'))) {

            return view('login');
        }

        return redirect('home');

    }

     public function logout(){
     	Session::flush();
     	Cache::flush();
    	return redirect('/');
    }

    public function login(Request $request){
    	$usuario = $request->user;
    	$clave = $request->password;

        $logeo = Usuarios::where('nickname', $usuario)->where('password', $clave)->first();
        if($logeo) {
            Session::put('usuario', $logeo->nickname);
            return 1;
        } else {
            return 2;
        }
    }

}
