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
Route::get('home', 'HomeController@feed');
Route::get('feeduser/{PkUsuario}', 'HomeController@feedUser');
Route::post('login', 'HomeController@login');
Route::post('store-publicacion', 'HomeController@storePublicacion');
Route::get('logout', 'HomeController@logout');
Route::get('validar-acceso', 'HomeController@validarAcceso');
Route::post('store-usuario', 'HomeController@storeUsuario');