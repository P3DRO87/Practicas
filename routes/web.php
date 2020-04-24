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

Route::get('/', 'TasksController@index');

Route::get('/tasks/get-all', 'TasksController@showAll');

Route::get('/tasks/single/{id}', 'TasksController@show');

Route::post('/tasks/update/{id}', 'TasksController@update');

Route::post('/tasks/create', 'TasksController@create');

Route::post('/tasks/delete/{id}', 'TasksController@destroy');