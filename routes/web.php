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

/*--------- TESTE -------------*/

Route::get('/home', function () {
    return view('home');
});

/*--------- PAGINA INICIAL -------------*/

Route::get('/', function () {
    return view('site.index');
});

/*--------- SEGURANÇA -------------*/

Auth::routes();

/*--------- OPORTUNIDADES -------------*/

Route::group(['prefix' => 'oportunidades'], function() {
    Route::get('',['as'=>'index','uses'=>'Oportunidade\OportunidadeController@index']);

    Route::get('adiciona',['as'=>'oportunidades.adiciona','uses'=>'Oportunidade\OportunidadeController@adiciona']);

    Route::post('salva',['as'=>'oportunidades.salva','uses'=>'Oportunidade\OportunidadeController@salva']);

    Route::get('{id}/edita',['as'=>'oportunidades.edita','uses'=>'Oportunidade\OportunidadeController@edita']);

    Route::put('{id}/atualiza',['as'=>'oportunidades.atualiza','uses'=>'Oportunidade\OportunidadeController@atualiza']);

	Route::get('{id}/apaga',['as'=>'oportunidades.apaga','uses'=>'Oportunidade\OportunidadeController@apaga']);
});

/*--------- ALUNOS -------------*/

Route::group(['prefix' => 'alunos'], function() {
    Route::get('',['as'=>'index','uses'=>'Aluno\AlunoController@index']);

    Route::get('adiciona',['as'=>'alunos.adiciona','uses'=>'Aluno\AlunoController@adiciona']);

    Route::post('salva',['as'=>'alunos.salva','uses'=>'Aluno\AlunoController@salva']);

    Route::get('{id}/edita',['as'=>'alunos.edita','uses'=>'Aluno\AlunoController@edita']);

    Route::put('{id}/atualiza',['as'=>'alunos.atualiza','uses'=>'Aluno\AlunoController@atualiza']);

	Route::get('{id}/apaga',['as'=>'alunos.apaga','uses'=>'Aluno\AlunoController@apaga']);
});

/*--------- PROFESSORES -------------*/

Route::group(['prefix' => 'professores'], function() {
    Route::get('',['as'=>'index','uses'=>'Professor\ProfessorController@index']);

    Route::get('adiciona',['as'=>'professores.adiciona','uses'=>'Professor\ProfessorController@adiciona']);

    Route::post('salva',['as'=>'professores.salva','uses'=>'Professor\ProfessorController@salva']);

    Route::get('{id}/edita',['as'=>'professores.edita','uses'=>'Professor\ProfessorController@edita']);

    Route::put('{id}/atualiza',['as'=>'professores.atualiza','uses'=>'Professor\ProfessorController@atualiza']);

	Route::get('{id}/apaga',['as'=>'professores.apaga','uses'=>'Professor\ProfessorController@apaga']);
});






