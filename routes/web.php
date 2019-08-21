<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Chama o metodo index do controller ContatoController
// {variavel?} ponto de interrogacao para tornar o parametro opcional
Route::get('/contato/{id?}', ['uses'=>'ContatoController@index']);

Route::get('/login', ['as'=>'site.login','uses'=>'Site\LoginController@index']);
Route::post('/login/entrar', ['as'=>'site.login.entrar', 'uses'=>'Site\LoginController@entrar']);
Route::get('/login/sair', ['as'=>'site.login.sair', 'uses'=>'Site\LoginController@sair']);

//Middleware para limitar apenas usuarios logados as rotas informadas
Route::group(['middleware'=>'auth'], function(){
    Route::get('/admin/cursos', ['as'=>'admin.cursos', 'uses' => 'Admin\CursoController@index']);
    Route::get('/admin/cursos/novo', ['as'=>'admin.cursos.novo', 'uses' => 'Admin\CursoController@novo']);
    Route::post('/admin/cursos/salvar', ['as'=>'admin.cursos.salvar', 'uses' => 'Admin\CursoController@salvar']);
    Route::get('/admin/cursos/editar/{id}', ['as'=>'admin.cursos.editar', 'uses' => 'Admin\CursoController@editar']);
    Route::put('/admin/cursos/atualizar/{id}', ['as'=>'admin.cursos.atualizar', 'uses' => 'Admin\CursoController@atualizar']);
    Route::get('/admin/cursos/deletar/{id}', ['as'=>'admin.cursos.deletar', 'uses' => 'Admin\CursoController@deletar']);
});

Route::get('/', ['as'=>'site.home','uses'=>'Site\HomeController@index']);

Route::post('/contato', ['uses'=>'ContatoController@criar']);

Route::put('/contato', ['uses'=>'ContatoController@editar']);
