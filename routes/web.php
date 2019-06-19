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
//apagar funcionario
Route::get('/funcionario/apaga/{id}', 'FuncionarioController@destroy');
//editar funcionario
Route::get('/funcionario/edita/{id}', 'FuncionarioController@edit');
Route::post('/funcionario/{id}', 'FuncionarioController@update');

//PONTOS
Route::resource('pontos','PontoController');
//apagar ponto
Route::get('pontos', 'PontoController@destroy');

//TABELA
    //cadastrar predio
    Route::resource('predio','PredioController')->name('predio', 'predio');
    //cadastrar requisito
    Route::resource('requisito','RequisitoController')->name('requisito', 'requisito');
    //tabela
    Route::resource('tabela','TabelaController');
