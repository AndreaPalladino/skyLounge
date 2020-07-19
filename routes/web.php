<?php

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

Route::get('/', 'Frontend@home')->name('home');

Route::get('/Prezzi', 'Frontend@prices')->name('prices');

Route::get('/Servizi', 'Frontend@services')->name('services');

Route::get('/Servizi/{name}', 'Frontend@details')->name('details');




Route::get('/Camere/create', 'RoomController@create')->name('rooms.create');
Route::post('/Camere/post', 'RoomController@store')->name('rooms.store');
Route::get('/Camere/index', 'RoomController@index')->name('rooms.index');
Route::get('/Camere/show/{room}', 'RoomController@show')->name('rooms.show');


Route::get('/Prenota/create', 'ClientController@create')->name('clients.create');
Route::post('/Prenota/store', 'ClientController@store')->name('clients.store');
Route::get('/Prenota/index', 'ClientController@index')->name('clients.index');
Route::get('/Prenota/show/{client}', 'ClientController@show')->name('clients.show');
Route::get('/Prenota/edit/{client}', 'ClientController@edit')->name('clients.edit');
Route::put('/Prenota/update/{client}', 'ClientController@update')->name('clients.update');
Route::delete('/Prenota/destroy/{client}', 'ClientController@destroy')->name('clients.destroy');