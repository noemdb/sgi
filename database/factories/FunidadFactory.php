<?php

use Faker\Generator as Faker;

$factory->define(App\Models\poa\actividades\Funidad::class, function (Faker $faker) {

    $nombre = ['1ER', '2DO', '3ER', '4TO', '5TO', '6TO', '7MO', '8VO', '9NO', '10MO'];
	
    return [
        'nombre' => $faker->randomElement($nombre),
        'afrecuencia_id' => function () { 
            return 
            DB::table('afrecuencias')
                ->select('afrecuencias.*','funidads.id as funidads_id')
                ->leftJoin('funidads', 'afrecuencias.id', '=', 'funidads.afrecuencia_id')
                ->inRandomOrder()
                ->first()->id;
        },

    ];
});
