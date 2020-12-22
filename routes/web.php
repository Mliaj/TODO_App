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

Route::get('/', 'TodoListController@index')->name('home');
Route::get('/add', 'TodoListController@create');
Route::post('/store', 'TodoListController@store');
Route::get('/edit', 'TodoListController@edit');
Route::post('/update/{id}', 'TodoListController@update');
Route::post('/delete', 'TodoListController@destroy')->name('delete');

Route::get('/activeTodos', 'TodoListController@getActiveTodos')->name('activeTodos');
Route::get('/completedTodos', 'TodoListController@getCompletedTodos')->name('completedTodos');