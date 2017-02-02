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

Route::get('termosdeservico', function () {
    return view('termosdeservico');
});

Auth::routes();
Route::get('/home', 'HomeController@index');


Route::group(['prefix' => 'admin'], function(){

		// ROTAS RESOURCE

Route::resource('clinica', 'ClinicaController');
Route::resource('medicamento', 'MedicamentosController');
Route::resource('prescricao', 'PrescricaoController');
Route::resource('paciente', 'PacienteController');

});



