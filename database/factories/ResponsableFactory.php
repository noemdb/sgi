<?php

use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(App\Models\poa\Responsable::class, function (Faker $faker) {
    
    $finicial = $faker->dateTimeBetween('2017-01-01','2017-12-31');
    $ffinal = $faker->dateTimeBetween($finicial,'2017-12-31');

    return [
    	'nombre' => $faker->name,
        'created_at'=>$finicial,
        'updated_at'=>$ffinal,
        'direccion_id' => function () { 
        	return 
        	DB::table('direccions')
				->select('direccions.*','responsables.id as direccion_id')
				->leftJoin('responsables', 'direccions.id', '=', 'responsables.direccion_id')
				// ->whereNull('rols.user_id')
                ->inRandomOrder()
				->first()->id;
        }      
    ];
});
