<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| rutas para los graficos del usuario
|
*/

Route::get('models/charts/poas', 'Chart\MactividadController@index')->name('poas.chart');
Route::get('models/charts/activresp', 'Chart\MactividadController@ActivResp')->name('poa.activresp.chart');
Route::get('models/charts/mactividadsmonths', 'Chart\MactividadController@ActivMonths')->name('poa.activmonths.chart');
Route::get('models/charts/mactividadsestado', 'Chart\MactividadController@ActivEstado')->name('poa.mactividadsestado.chart');
// Route::get('models/charts/expedientesmonths', 'Chart\ExpedientesController@ExpedienteMonth')->name('expedientes.months.chart');
// Route::get('models/charts/estudiantesestados', 'Chart\EstudiantesController@EstudianteEstado')->name('estudiantes.estados.chart');
// Route::get('models/charts/profiles', 'Chart\ProfileController@index')->name('viewchartprofiles');
// Route::get('models/charts/rols', 'Chart\RolController@index')->name('viewchartrols');


?>