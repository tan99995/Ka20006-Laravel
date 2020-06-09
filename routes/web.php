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
    return view('auth.login');
});
Route::get('/guest', function(){
    return view('guest');
})->name('guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/history', function () {
//     return view('history');
// })->name('history');
Route::get('/calculation', 'CalculationController@index')->name('calculation');

Route::get('/history', 'CalculationController@home')->name('history');


Route::post('/calculation', "CalculationController@store");
