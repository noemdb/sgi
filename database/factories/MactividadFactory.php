<?php

use Faker\Generator as Faker;

$factory->define(App\Models\poa\actividades\Mactividad::class, function (Faker $faker) {

	$finicial = $faker->dateTimeBetween('2017-01-01','2017-12-31');
    $ffinal = $faker->dateTimeBetween($finicial,'2017-12-31');
    $arr_frecuencia = ["1", "2", "3", "4", "6", "12"];

    return [
        'descripcion' => $faker->realText,
        // 'finicial'=>$finicial,
        // 'ffinal'=>$ffinal,
        'ubicaion' => $faker->city,
        // 'frecuencia' => $faker->randomNumber(1),
        // 'frecuencia' => rand(1,12),
        'frecuencia' => $faker->randomElement($arr_frecuencia),
        
        'mproducto_id' => function () { 
        	return 
        	DB::table('mproductos')
				->select('mproductos.*','mactividads.id as mactividads_id')
				->leftJoin('mactividads', 'mproductos.id', '=', 'mactividads.mproducto_id')
                ->inRandomOrder()
				->first()->id;
        },
        'responsable_id' => function () { 
            return 
            DB::table('responsables')
                ->select('responsables.*','mactividads.id as mactividads_id')
                ->leftJoin('mactividads', 'responsables.id', '=', 'mactividads.responsable_id')
                ->whereNull('mactividads.responsable_id')
                ->inRandomOrder()
                ->first()->id;
        }

    ];
});
