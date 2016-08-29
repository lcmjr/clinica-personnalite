<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ControllerHome@pagina');
Route::get('/home', 'ControllerHome@pagina')->name('Home');
Route::get('/clinica', 'ControllerClinica@pagina')->name('Clinica');
Route::get('/especializacoes', 'ControllerEspecializacoes@pagina')->name('Especializacoes');
Route::get('/doutores', 'ControllerDoutores@pagina')->name('Doutores');
Route::get('/contato', 'ControllerContato@pagina')->name('Contato');
Route::post('/contato', 'ControllerContato@email');
Route::post('/newsletter', 'ControllerNewsletter@email');
Route::get('/newsletter/{id}', 'ControllerNewsletter@ativar_email');
