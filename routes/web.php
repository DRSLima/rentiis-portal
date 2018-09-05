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

Route::get('/Danilo-Lima', function () {
    return view('welcome');
});

Route::get('/usuario/{id}', function ($id) {
    return 'usuario: '.$id;
})->where('id', '[0-9]+');

Route::get('/usuario/listar', ['as'=>'usuario.listar','uses'=>'CadastroUsuarioController@listar']);
Route::get('/usuario/adicionar', ['as'=>'usuario.adicionar','uses'=>'CadastroUsuarioController@adicionar']);
Route::post('/usuario/salvar', ['as'=>'usuario.salvar','uses'=>'CadastroUsuarioController@salvar']);
Route::get('/usuario/editar/{id}', ['as'=>'usuario.editar','uses'=>'CadastroUsuarioController@editar']);
Route::put('/usuario/atualizar/{id}', ['as'=>'usuario.atualizar','uses'=>'CadastroUsuarioController@atualizar']);
Route::get('/usuario/deletar/{id}', ['as'=>'usuario.deletar','uses'=>'CadastroUsuarioController@deletar']);