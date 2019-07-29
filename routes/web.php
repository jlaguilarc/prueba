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

Route::get('/', function () {
    return view('encuesta');
});

Route::get('/encuesta', 'EncuestaController@index');

Route::post('/validacion', 'Usuario@validar');

Route::post('/reportes/general', 'ReportesController@general');

Route::post('/guardar', 'EncuestaController@guardar');

Route::get('/preguntas', 'EncuestaController@preguntas');

Route::get('/reportes', 'ReportesController@index');


Route::get('/home', function(){
	return view('home');
});


Route::get('/login', function(){
	return view('login');
});
