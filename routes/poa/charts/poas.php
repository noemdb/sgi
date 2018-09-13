<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| rutas para los graficos del usuario
|
*/

Route::get('models/charts/poas', 'Chart\PoasController@index')->name('poas.chart');
Route::get('models/charts/poasresponsables', 'Chart\PoasController@PoaResp')->name('poaxresp.chart');
// Route::get('models/charts/expedientesmonths', 'Chart\ExpedientesController@ExpedienteMonth')->name('expedientes.months.chart');
// Route::get('models/charts/estudiantesestados', 'Chart\EstudiantesController@EstudianteEstado')->name('estudiantes.estados.chart');
// Route::get('models/charts/profiles', 'Chart\ProfileController@index')->name('viewchartprofiles');
// Route::get('models/charts/rols', 'Chart\RolController@index')->name('viewchartrols');


?>