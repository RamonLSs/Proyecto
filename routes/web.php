<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('home');
// });


// Route::get('/','PersonajeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','PersonajeController@index')->name('personaje.indeex');
Route::get('/personaje/create','PersonajeController@create')->name('personaje.storee')->middleware('auth', 'role:Administrador');
// Route::get('/','PersonajeController@create')->name('personaje.create');


Route::get('/informacions/{id}/create', 'InformacionController@create')->name('informacion.createe')->middleware('auth', 'role:Administrador');
Route::get('/estadisticas/{id}/create', 'EstadisticaController@create')->name('estadistica.createe')->middleware('auth', 'role:Administrador');
Route::get('/episodios/{id}/create', 'EpisodioController@index')->name('episodio.index')->middleware('auth', 'role:Administrador');
Route::get('/tags/{id}/create', 'TagController@index')->name('tag.index')->middleware('auth', 'role:Administrador');
Route::get('/perfil', 'UserController@index')->name('usuario.index');
Route::get('/perfil/cambiarcontraseña', 'UserController@cambiarContraseña')->name('usuario.cambiar')->middleware('auth');

Route::post('/perfil/guardarcontraseña', 'UserController@guardarContraseña')->name('usuario.guardar')->middleware('auth');


Auth::routes();


Route::resource('personajes', 'PersonajeController');
Route::resource('informacions', 'InformacionController');
Route::resource('estadisticas', 'EstadisticaController');
Route::resource('episodios', 'EpisodioController');
Route::resource('tags', 'TagController');
Route::resource('users', 'UserController');



