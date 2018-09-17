<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| rutas para los graficos del usuario
|
*/

Route::get('poas/charts/home', 'Chart\PoasController@index')->name('poas.charts.home');
Route::get('poas/charts/poaxactividad', 'Chart\PoasController@PoaActividad')->name('poas.charts.poaxactividad');
// Route::get('models/charts/poas/poaxresp', 'Chart\PoasController@PoaResp')->name('poas.poaxresp.chart');
// Route::get('models/charts/expedientesmonths', 'Chart\ExpedientesController@ExpedienteMonth')->name('expedientes.months.chart');
// Route::get('models/charts/estudiantesestados', 'Chart\EstudiantesController@EstudianteEstado')->name('estudiantes.estados.chart');
// Route::get('models/charts/profiles', 'Chart\ProfileController@index')->name('viewchartprofiles');
// Route::get('models/charts/rols', 'Chart\RolController@index')->name('viewchartrols');


?>