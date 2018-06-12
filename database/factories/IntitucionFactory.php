<?php

use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(App\Models\poa\Institucion::class, function (Faker $faker) {
	
    $finicial = $faker->dateTimeBetween('2017-01-01','2017-12-31');
    $ffinal = $faker->dateTimeBetween($finicial,'2017-12-31');

    return [
        'nombre' => $faker->company,
        'descripcion' => $faker->realText,
        // 'tipo' => array_rand($arr_tipo,1),
        'created_at'=>$finicial,
        'updated_at'=>$ffinal,
    ];
});
