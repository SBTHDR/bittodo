<?php

use Illuminate\Support\Facades\Route;

Route::get('/todos', 'TodoController@index')->name('todo.index');
Route::get('/todos/create', 'TodoController@create');
Route::post('/todos/create', 'TodoController@store');
Route::get('/todos/{todo}/edit', 'TodoController@edit');
Route::put('/todos/{todo}/update', 'TodoController@update')->name('todo.update');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', 'UserController@index');
Route::post('/upload', 'UserController@uploadAvatar');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
