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
/*
Route::get('/', function () {
    return view('inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});

Route::get('/acceso', function () {
    return view('acceso');
});

*/






Route::get('/', function()
{
    return View::make('pages.home');
});

Route::get('about', function()
{
    return View::make('pages.about');
});

Route::get('projects', function()
{
    return View::make('pages.projects');
});

Route::get('contact', function()
{
    return View::make('pages.contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
