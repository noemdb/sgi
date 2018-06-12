<?php

use Faker\Generator as Faker;

$factory->define(App\Models\poa\actividades\Afrecuencia::class, function (Faker $faker) {
    
	// $frecuencia = ['DIARIO', 'SEMALNAL', 'MENSUAL', 'BIMENSUAL', 'TRIMESTRAL', 'CUATRIMESTRAL', 'SEMESTRAL', 'ANUAL'];
    // $finicial = $faker->dateTimeBetween('2017-01-01','2017-12-31');
    // $ffinal = $faker->dateTimeBetween($finicial,'2017-12-31');
    $arr_lapso = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"];
	
    return [
        // 'frecuencia' => $faker->randomNumber(2),
        // 'finicial'=>$finicial,
        // 'ffinal'=>$ffinal,
        // 'lapso' => $faker->randomNumber(1),
        // 'cantidad' => $faker->randomNumber(2),
        // 'lapso' => rand(1,12),
        'lapso' => $faker->randomElement($arr_lapso),
        'cantidad' => rand(1,12),        
        'mactividad_id' => function () { 
            return 
            DB::table('mactividads')
                ->select('mactividads.*','afrecuencias.id as p_frecuencias_id')
                ->leftJoin('afrecuencias', 'mactividads.id', '=', 'afrecuencias.mactividad_id')
                // ->whereNull('afrecuencias.mactividad_id')
                ->inRandomOrder()
                ->first()->id;
        },

    ];
});
