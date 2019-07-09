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
Route::get('/pontos/apaga/{id}', 'PontoController@destroy');   


//TABELA
    //cadastrar predio
    Route::resource('predio','PredioController');
    //editar prédio
    Route::get('/predio/edita/{id}', 'PredioController@edit');
    Route::post('/predio/{id}', 'PredioController@update');
    //excluir predio
    Route::get('/predio/apaga/{id}', 'PredioController@destroy');   
    //cadastrar requisito
    Route::resource('requisito','RequisitoController');
    //editar requisito
    Route::get('/requisito/edita/{id}', 'RequisitoController@edit');
    Route::post('/requisito/{id}', 'RequisitoController@update');
    //excluir requisito
    Route::get('/requisito/apaga/{id}', 'RequisitoController@destroy');
    //tabela
    Route::resource('tabela','TabelaController');
