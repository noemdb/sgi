<?php

use Faker\Generator as Faker;

$factory->define(App\Models\poa\problema\Pcausaefecto::class, function (Faker $faker) {
    return [
        'causaefecto' => $faker->realText,
        'mproblema_id' => function () { 
        	return 
        	DB::table('mproblemas')
				->select('mproblemas.*','pcausaefectos.id as pcausaefectos_id')
				->leftJoin('pcausaefectos', 'mproblemas.id', '=', 'pcausaefectos.mproblema_id')
                ->inRandomOrder()
				->first()->id;
        },

    ];
});
