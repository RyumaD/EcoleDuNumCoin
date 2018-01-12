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

Route::get('/addCompte',array(
    'as'=>'addCompte',
    'uses'=>'Controller@addCompte'
));

Route::post('/newCompteService',array(
    'as'=>'newCompteService',
    'uses'=>'Controller@newCompteService'
));

Route::get('/Transfert',array(
    'as'=>'Transfert',
    'uses'=>'Controller@Transfert'
));