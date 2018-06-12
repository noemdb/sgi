<?php 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| rutas para los CRUD (solo resource) de los diferentes modelos DB
|
*/


// INI resource

	//INI POA
		Route::resource('models/crud/poa/institucions','Crud\InstitucionController');
		Route::resource('models/crud/poa/direccions','Crud\DireccionController');
		Route::resource('models/crud/poa/poas','Crud\PoaController');
		Route::resource('models/crud/poa/mlogicos','Crud\MlogicoController');
		Route::resource('models/crud/poa/responsables','Crud\ResponsableController');

		Route::resource('models/crud/poa/mproblemas/mproblemas','Crud\problemas\MproblemaController');
		Route::resource('models/crud/poa/mproblemas/pdeterminantes','Crud\problemas\PdeterminanteController');
		Route::resource('models/crud/poa/mproblemas/pcausaefectos','Crud\problemas\PcausaefectoController');
		Route::resource('models/crud/poa/mobjetivos/mobjetivos','Crud\objetivos\MobjetivoController');
		Route::resource('models/crud/poa/presupuestarias/presupuestarias','Crud\presupuestarias\PresupuestariaController');
		Route::resource('models/crud/poa/mproductos/mproductos','Crud\productos\MproductoController');
		Route::resource('models/crud/poa/mproductos/psupuestos','Crud\productos\PsupuestoController');
		Route::resource('models/crud/poa/mproductos/pverificadors','Crud\productos\PverificadorController');
		Route::resource('models/crud/poa/mproductos/pindicadors','Crud\productos\PindicadorController');
		Route::resource('models/crud/poa/mactividads/mactividads','Crud\actividades\MactividadController');
		Route::resource('models/crud/poa/mactividads/aestados','Crud\actividades\AestadoController');
		Route::resource('models/crud/poa/mactividads/afrecuencias','Crud\actividades\AfrecuenciaController');
	//FIN POA

// FIN resource

 ?>