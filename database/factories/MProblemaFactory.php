<?php

use Faker\Generator as Faker;

$factory->define(App\Models\poa\problema\Mproblema::class, function (Faker $faker) {
    return [
        'problema' => $faker->realText,
        'poa_id' => function () { 
        	return 
        	DB::table('poas')
				->select('poas.*','mproblemas.id as mproblemas_id')
				->leftJoin('mproblemas', 'poas.id', '=', 'mproblemas.poa_id')
                ->inRandomOrder()
				->first()->id;
        },
        'direccion_id' => function () { 
        	return 
        	DB::table('direccions')
				->select('direccions.*','mproblemas.id as mproblemas_id')
				->leftJoin('mproblemas', 'direccions.id', '=', 'mproblemas.direccion_id')
                ->inRandomOrder()
				->first()->id;
        }
    ];
});
