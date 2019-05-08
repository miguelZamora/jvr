<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|------------------------------------------------------------------------	-	-
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});

Route::get('/acceso', function () {
    return view('acceso');
});

Route::match(array('GET', 'POST'), '/post', function()
{	
	return '¡Hola mundo!';
});

#
Route::get('usuario/{id}', 'UsuariosController@showProfile');

Route::get('/usuario_view', function () {
    return view('usuario_view');
});

Route::resource('data','Datacontroller');