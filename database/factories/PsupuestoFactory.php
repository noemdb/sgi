<?php

use Faker\Generator as Faker;

$factory->define(App\Models\poa\producto\Psupuesto::class, function (Faker $faker) {
    return [
        'supuesto' => $faker->realText,
        'mproducto_id' => function () { 
        	return 
        	DB::table('mproductos')
				->select('mproductos.*','psupuestos.id as psupuestos_id')
				->leftJoin('psupuestos', 'mproductos.id', '=', 'psupuestos.mproducto_id')
                ->inRandomOrder()
				->first()->id;
        },

    ];
});
