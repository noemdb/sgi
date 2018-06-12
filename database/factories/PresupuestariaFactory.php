<?php

use Faker\Generator as Faker;

$factory->define(App\Models\poa\presupuestaria\Presupuestaria::class, function (Faker $faker) {
    $asignacion = ['TOTAL', 'ORDINARIO'];
    return [
        'descripcion' => $faker->realText,
        'programa' => $faker->words(3,true),
        'asignacion' => $faker->randomElement($asignacion),
        'mobjetivo_id' => function () { 
        	return 
        	DB::table('mobjetivos')
				->select('mobjetivos.*','presupuestarias.id as presupuestarias_id')
				->leftJoin('presupuestarias', 'mobjetivos.id', '=', 'presupuestarias.mobjetivo_id')
                ->inRandomOrder()
				->first()->id;
        },

    ];
});
