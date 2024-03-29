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

Route::get('/', function () {
    return view('welcome');
});

Route::get('tasks','TasksController@index');

Route::get('tasks/{task}','TasksController@show');

Route::get('new-tasks','TasksController@create');

Route::post('store-task','TasksController@store');

Route::get('tasks/{task}/edit','TasksController@edit');

Route::post('tasks/{task}/update-task','TasksController@update');

Route::get('tasks/{task}/delete','TasksController@destroy');

Route::get('tasks/{task}/complete','TasksController@complete');