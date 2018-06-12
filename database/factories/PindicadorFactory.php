<?php

use Faker\Generator as Faker;

$factory->define(App\Models\poa\producto\Pindicador::class, function (Faker $faker) {
    return [
        'indicador' => $faker->words(3,true),
        'mproducto_id' => function () { 
        	return 
        	DB::table('mproductos')
				->select('mproductos.*','pindicadors.id as pindicadors_id')
				->leftJoin('pindicadors', 'mproductos.id', '=', 'pindicadors.mproducto_id')
                ->inRandomOrder()
				->first()->id;
        },

    ];
});
