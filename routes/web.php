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

Route::get('/', function () {
    return view('welcome');
});

// {variavel?} ponto de interrogacao para tornar o parametro opcional
Route::get('/contato/{id?}', function($id = null){
  return "Contato! ID: $id";
});

Route::post('/contato', function($id = null){
  //dd($_POST);  util para debug de variavies post
  return "Contato! ID: $id";
});

Route::put('/contato', function($id = null){
  dd($_POST);  
  return "Contato! ID: $id";
});
