<?php

use Illuminate\Database\Seeder;

class PverificadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\poa\producto\Pverificador::class)->times(200)->create();
    }
}
