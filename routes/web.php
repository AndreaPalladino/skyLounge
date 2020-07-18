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




Route::get('/Camere/create', 'RoomController@create')->name('rooms.create');
Route::post('/Camere/post', 'RoomController@store')->name('rooms.store');
Route::get('/Camere/index', 'RoomController@index')->name('rooms.index');
Route::get('/Camere/show/{room}', 'RoomController@show')->name('rooms.show');