<?php

use Faker\Generator as Faker;

$factory->define(App\Models\poa\objetivo\Mobjetivo::class, function (Faker $faker) {
    return [
        'objetivo' => $faker->realText,
        'mproblema_id' => function () { 
        	return 
        	DB::table('mproblemas')
				->select('mproblemas.*','mobjetivos.id as mobjetivos_id')
				->leftJoin('mobjetivos', 'mproblemas.id', '=', 'mobjetivos.mproblema_id')
                ->inRandomOrder()
				->first()->id;
        },

    ];
});
