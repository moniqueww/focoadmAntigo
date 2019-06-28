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

//FUNCIONARIO
Route::resource('funcionario', 'FuncionarioController');
//editar funcionario
Route::get('/funcionario/edita/{id}', 'FuncionarioController@edit');
Route::post('/funcionario/{id}', 'FuncionarioController@update');

//PONTOS
Route::resource('pontos','PontoController');

//TABELA
    //cadastrar predio
    Route::resource('predio','PredioController');
    //cadastrar requisito
    Route::resource('requisito','RequisitoController');
    //cadastrar data
    Route::resource('data','DataController');
    //tabela
    Route::resource('tabela','TabelaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
