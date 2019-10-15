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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/compradoras', 'HomeController@index')->name('compradoras');
Route::get('/vendedoras', 'HomeController@index')->name('vendedoras');
Route::get('/usuarios', 'usercontroller@index')->name('usuarios');


Route::get('/a1', function () {
    return view('a1');
});