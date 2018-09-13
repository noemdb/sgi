<?php

use Faker\Generator as Faker;

$factory->define(App\Models\poa\actividades\Aestado::class, function (Faker $faker) {
    
    $estado = ['INICIADA', 'REPROGRAMADA', 'FINALIZADA'];
    $created_at = $faker->dateTimeBetween('2017-01-01','2017-12-31');
	
    return [
        'estado' => $faker->randomElement($estado),
        'mactividad_id' => function () { 
            return 
            DB::table('mactividads')
                ->select('mactividads.*','aestados.id as aestados')
                ->leftJoin('aestados', 'mactividads.id', '=', 'aestados.mactividad_id')
                ->whereNull('aestados.mactividad_id') //Error provisional intensional(cada tarea puede tener muchos estados)
                ->inRandomOrder()
                ->first()->id;
        },
        'user_id' => function () { 
        	return 
        	DB::table('users')
				->select('users.*','aestados.id as aestados_id')
				->leftJoin('aestados', 'users.id', '=', 'aestados.user_id')
				// ->whereNull('aestados.user_id')
                ->inRandomOrder()
				->first()->id;
        },
        'created_at' => $created_at,
        'updated_at' => $created_at,

    ];
});
