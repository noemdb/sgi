<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| rutas para las createWithid de los diferentes modelos DB
|
*/


//INI POA
Route::get('models/crud/poa/mproblemas/mproblemas/createWithid/{id}','Crud\problemas\MproblemaController@createWithid')->name('mproblemas.createWithid');
Route::get('models/crud/poa/mproblemas/pdeterminantes/createWithid/{id}','Crud\problemas\PdeterminanteController@createWithid')->name('pdeterminante.createWithid');
Route::get('models/crud/poa/mproblemas/pcausaefectos/createWithid/{id}','Crud\problemas\PcausaefectoController@createWithid')->name('pcausaefecto.createWithid');
Route::get('models/crud/poa/mobjetivos/mobjetivos/createWithid/{id}','Crud\objetivos\MobjetivoController@createWithid')->name('mobjetivo.createWithid');
//FIN POA

 ?>