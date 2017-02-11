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

//Auth::routes();

Route::get('/home', 'RegisterController@index');

//Auth::routes();

Route::get('/register', 'RegisterController@register');

Route::post('/insert', 'RegisterController@insert');

Route::get('/login', 'RegisterController@login');

Route::post('/check', 'RegisterController@check');