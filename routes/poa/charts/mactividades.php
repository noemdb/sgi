<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| rutas para los graficos del usuario
|
*/

Route::get('mactividads/charts/home', 'Chart\MactividadController@index')->name('mactividads.charts.home');
Route::get('mactividads/charts/activixrespon', 'Chart\MactividadController@ActivResp')->name('mactividads.charts.activixrespon');
Route::get('mactividads/charts/mactividadsmonths', 'Chart\MactividadController@ActivMonths')->name('mactividads.charts.mactividadsmonths');
Route::get('mactividads/charts/mactividadsestado', 'Chart\MactividadController@ActivEstado')->name('mactividads.charts.mactividadsestado');
// Route::get('charts/poa/mactividad/mactividadsestado', 'Chart\MactividadController@ActivEstado')->name('mactividad.mactividads.mactividadsestado.chart');



?>