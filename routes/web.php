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

Route::get('/registro-menores', [
    'uses' => 'RegistroMenoresController@getRegistro',
    'middleware' => 'auth',

])->name('resgistroMenores');

Route::get('/antecedentes', [
    'uses' => 'RegistroMenoresController@getAntecedentes',
    'middleware' => 'auth',

])->name('antecedentesMenores');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
