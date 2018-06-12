<?php

use Faker\Generator as Faker;

$factory->define(App\Models\poa\Mlogico::class, function (Faker $faker) {
    $finicial = $faker->dateTimeBetween('2017-01-01','2017-12-31');
    $ffinal = $faker->dateTimeBetween($finicial,'2017-12-31');

    return [
        'tipo' => $faker->word,
        'resumen' => $faker->realText,
        'indicadores' => $faker->words(4,true),
        'mverificacion' => $faker->words(4,true),
        'supuestos' => $faker->realText,
        'created_at'=>$finicial,
        'updated_at'=>$ffinal,
        'poa_id' => function () { 
            return 
            DB::table('poas')
                ->select('poas.*','mlogicos.id as mlogicos_id')
                ->leftJoin('mlogicos', 'poas.id', '=', 'mlogicos.poa_id')
                ->whereNull('mlogicos.poa_id')
                ->inRandomOrder()
                ->first()->id;
        }
    ];
});
