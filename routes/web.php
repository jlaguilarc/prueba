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
    return redirect('/encuesta');
});

Route::get('/encuesta', 'EncuestaController@index');

Route::get('/administrativo', 'UsuarioController@administrativo')->middleware('auth');

Route::post('/validacion', 'Auth\LoginController@login');

Route::post('/reportes/general', 'ReportesController@general');

Route::post('/guardar', 'EncuestaController@guardar');

Route::get('/preguntas', 'EncuestaController@preguntas');

Route::get('/reportes', 'ReportesController@index');


Route::get('/home', function(){
	return view('home');
});


Route::get('/login',  [ 'as' => 'login', 'uses' => 'UsuarioController@inicio']);

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('reporte_graduados','reporte_graduados@index');

Route::get('/ejemplo/{documento}', 'PostController@index');



