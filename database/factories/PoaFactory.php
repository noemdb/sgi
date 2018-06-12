<?php

use Faker\Generator as Faker;

$factory->define(App\Models\poa\Poa::class, function (Faker $faker) {

    $finicial = $faker->dateTimeBetween('2017-01-01','2017-12-31');
    $ffinal = $faker->dateTimeBetween($finicial,'2017-12-31');
    // $periodo = $faker->dateTimeThisDecade->format(Y);

    return [
    	'descripcion' => $faker->realText,
    	'area' => $faker->jobTitle,
    	'estrategia' => $faker->realText,
        'periodo' => $faker->dateTimeThisDecade->format('Y'),
        'created_at'=>$finicial,
        'updated_at'=>$ffinal,

        'institucion_id' => function () { 
        	return 
        	DB::table('institucions')
				->select('institucions.*','poas.id as poas_id')
				->leftJoin('poas', 'institucions.id', '=', 'poas.institucion_id')
				// ->whereNull('rols.user_id')
                ->inRandomOrder()
				->first()->id;
        },    

        'user_id' => function () { 
        	return 
        	DB::table('users')
				->select('users.*','poas.id as poas_id')
				->leftJoin('poas', 'users.id', '=', 'poas.user_id')
				// ->whereNull('rols.user_id')
                ->inRandomOrder()
				->first()->id;
        }
    ];
});
