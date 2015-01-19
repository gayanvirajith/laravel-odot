<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'ToDoListController@index');

// Route::get('/todos','ToDoListController@index');
// Route::get('/todos/{id}', 'ToDoListController@show');

Route::resource('todos', 'ToDoListController');

Event::listen('illuminate.query', function($query){
  var_dump($query);
});