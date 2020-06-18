<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

// ! Otra forma de realizar rutas

// * Esta ruta envia el id,
// * mediante la url del navegador.

Route::get('usuario/{id}', function($id){
    return 'Bienvenido usuario: ' .$id;
});

// * Esta ruta envia el id de forma opcional,
// * mediante la url del navegador.

Route::get('user/{name?}', function($name = null){
    return 'Bienvenido: ' .$name;
});

// ! Otra forma de realizar rutas
// *Rutas con Nombre

// Route::get('conta', function(){
//     return "Aqui esta la informacion de contactos";
// }) ->name('contactos');

// Route::get('/', function(){
//     echo"<a href= '". route ('contactos') ."'> Contacto A </a><br>";
//     echo"<a href= '". route ('contactos') ."'> Contacto B </a><br>";
//     echo"<a href= '". route ('contactos') ."'> Contacto C </a><br>";
//     echo"<a href= '". route ('contactos') ."'> Contacto D </a><br>";
//     echo"<a href= '". route ('contactos') ."'> Contacto E </a><br>";
// });

// Route::get('/', function(){
//     $nombre = "Alberto";
//     return view ('home')->with('nombre', $nombre);
// });

// Route::get('/', function(){
//     $nombre = "Alberto";
//     return view ('home', ['nombre'->$nombre]);
// }) ->name('home');

// ! Rutas del menu
//  Lasrutas se comportan de esta forma
//  Route::view('NombreURL', 'NombreVista')->name('NombreRuta')
Route::get('/', 'controladorhome')->name('home');

// Route::get('/portafolio', 'PortafolioController@index')->name('portafolio.index');
// Route::get('/portafolio/create', 'PortafolioController@create')->name('portafolio.create');
// Route::get('/portafolio/{project}/edit', 'PortafolioController@edit')->name('portafolio.edit');
// Route::patch('/portafolio/{project}', 'PortafolioController@update')->name('portafolio.update');
// Route::post('/portafolio', 'PortafolioController@store')->name('portafolio.store');
// Route::get('/portafolio/{project}', 'PortafolioController@show')->name('portafolio.show');
// Route::delete('/portafolio/{project}', 'PortafolioController@destroy')->name('portafolio.destroy');

//La ruta resource es para simplificar las rutas en una sola
Route::resource('portafolio', 'PortafolioController')->names('portafolio')->parameters(['portafolio' => 'project']);

Route::view('/servicio', 'servicio')->name('servicio');
Route::view('/soporte', 'soporte')->name('soporte');
Route::view('/contacto', 'contacto')->name('contacto');
Route::post('/contacto', 'MensajeControlador@store');



Auth::routes(['register' =>false ]);

