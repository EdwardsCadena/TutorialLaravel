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

Route::get('/',["as"=>"route.home","uses"=>"IndexController@home"]);
Route::get('requisitos',["as"=>"route.requisitos","uses"=>"IndexController@requerimiento"]);
Route::get('instalacion',["as"=>"route.instalacion","uses"=>"IndexController@instalacion"]);
Route::get('tutoriales-comandos',["as"=>"route.comandos","uses"=>"IndexController@comandos"]);
Route::get('tutoriales-creacion',["as"=>"route.crear","uses"=>"IndexController@crear"]);
Route::get('tutoriales-rutas',["as"=>"route.routes","uses"=>"IndexController@routes"]);
Route::get('tutoriales-controladores',["as"=>"route.controladores","uses"=>"IndexController@controladores"]);

