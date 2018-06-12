<?php

use Faker\Generator as Faker;

$factory->define(App\Models\poa\actividades\Aestado::class, function (Faker $faker) {
    
    $estado = ['INICIADA', 'REPROGRAMADA', 'FINALIZADA'];
	
    return [
        'estado' => $faker->randomElement($estado),
        'mactividad_id' => function () { 
            return 
            DB::table('mactividads')
                ->select('mactividads.*','aestados.id as aestados')
                ->leftJoin('aestados', 'mactividads.id', '=', 'aestados.mactividad_id')
                // ->whereNull('p_frecuencias.mactividada_id')
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

    ];
});
