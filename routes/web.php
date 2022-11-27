<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'HomeController@loginView');
Route::get('home', 'HomeController@homeView');
Route::post('login', 'HomeController@login');
Route::get('logout', 'HomeController@logout');
Route::get('validar-acceso', 'HomeController@validarAcceso');
Route::get('crear-usuario', 'HomeController@crearUsuario');
Route::post('store-usuario', 'HomeController@storeUsuario');
Route::post('cambiar-password', 'HomeController@cambiarPassword');