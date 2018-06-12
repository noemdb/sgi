<?php

use Faker\Generator as Faker;

$factory->define(App\Models\poa\producto\Pverificador::class, function (Faker $faker) {
    return [
        'verificador' => $faker->realText,
        'mproducto_id' => function () { 
        	return 
        	DB::table('mproductos')
				->select('mproductos.*','pverificadors.id as pverificadors_id')
				->leftJoin('pverificadors', 'mproductos.id', '=', 'pverificadors.mproducto_id')
                ->inRandomOrder()
				->first()->id;
        },

    ];
});
