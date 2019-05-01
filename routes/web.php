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

Route::get('/','CrudController@index')->name('index');
Route::get('/create','CrudController@create')->name('create');
Route::get('/show/{$id}','CrudController@show')->name('show');
Route::post('/store','CrudController@store')->name('store');
Route::get('/edit','CrudController@edit')->name('edit');
Route::get('/update','CrudController@update')->name('update');
