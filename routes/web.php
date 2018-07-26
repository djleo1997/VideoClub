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


Route::redirect('/', 'VideoClub');

//Mostrar Catalogos
Route::get('VideoClub/catalog','CatalogController@getIndex')->name('index');

//Mostrar pelicula individual
Route::get('catalog/show/{id}','CatalogController@getShow')->name('showMovie');

//Mostrar Crear pelicula
Route::get('VideoClub/catalog/create','CatalogController@getCreate')->name('createMovie')->middleware('auth');

//Mostrar Editar pelicula
Route::get('catalog/edit/{id}','CatalogController@getEdit')->name('editMovie')->middleware('auth');

//Eliminar Pelicula
Route::get('catalog/delete/{id}','CatalogController@getDelete')->name('deleteMovie')->middleware('auth');

//Administrar peliculas
Route::resource('movies','CatalogController');

Route::get('catalog/{id}/rented','CatalogController@Rented')->name('updateRented')->middleware('auth');

//Rutas de autentificación
Auth::routes();

// hola 

//pantalla principal
Route::get('/VideoClub', 'HomeController@index')->name('home');

