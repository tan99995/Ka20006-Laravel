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

Route::get('/', 'PageController@home');

Route::get('/login', 'PageController@login'); //displays the view for creating a login page

Route::get('/index', 'PageController@index');

Route::get('/register', 'PageController@register'); //displays the view for creating the form

Route::post('/register', 'PageController@store'); //stores a new user


