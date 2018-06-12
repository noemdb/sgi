<?php

use Faker\Generator as Faker;

$factory->define(App\Models\poa\producto\Mproducto::class, function (Faker $faker) {
    return [
        'producto' => $faker->realText,
        'mobjetivo_id' => function () { 
        	return 
        	DB::table('mobjetivos')
				->select('mobjetivos.*','mproductos.id as mproductos_id')
				->leftJoin('mproductos', 'mobjetivos.id', '=', 'mproductos.mobjetivo_id')
                ->inRandomOrder()
				->first()->id;
        },

    ];
});
