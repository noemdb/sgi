<?php

use Faker\Generator as Faker;

$factory->define(App\Models\poa\problema\Pdeterminante::class, function (Faker $faker) {
    return [
        'determinante' => $faker->realText,
        'mproblema_id' => function () { 
        	return 
        	DB::table('mproblemas')
				->select('mproblemas.*','pdeterminantes.id as pdeterminates_id')
				->leftJoin('pdeterminantes', 'mproblemas.id', '=', 'pdeterminantes.mproblema_id')
                ->inRandomOrder()
				->first()->id;
        },

    ];
});
