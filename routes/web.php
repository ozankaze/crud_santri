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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/santri', 'SantriController@index')->name('santri.index');
Route::get('/santri/create', 'SantriController@create')->name('santri.create');
Route::post('/santri', 'SantriController@store')->name('santri.store');
Route::get('/santri/{id}', 'SantriController@show')->name('santri.show');
Route::get('/santri/{id}/edit', 'SantriController@edit')->name('santri.edit');
Route::patch('/santris/{id}/update', 'SantriController@update')->name('santri.update');
