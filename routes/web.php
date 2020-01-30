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
Route:: resource('cola1', 'Cajero1Controller')->names('cola1');
Route:: resource('cola2', 'Cajero2Controller')->names('cola2');
Route:: resource('cola3', 'Cajero3Controller')->names('cola3');
Route:: resource('cola4', 'Cajero4Controller')->names('cola4');

// Route:: get('cola1.eliminar', 'Cajero3Controller')->names('cola1.eliminar');

 Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
